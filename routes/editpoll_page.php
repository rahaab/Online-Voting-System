<?php
session_start();
include("../api/connect.php");

$poll = mysqli_query($connect,"SELECT * FROM poll");
$poll_details = mysqli_fetch_array($poll);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css">
    <title>Online Voting System - Edit Rules</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karma:wght@600&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="logreg">
            <img src="logonew.png" alt="">
            <ul>
                <li><a href="#about">About Us</a></li>
                <li><a href="rules.php" target="_blank">Rules</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <hr>
        <h1>Online Voting System</h1>
        <div class="pollform">
            <form action="../api/editpoll.php" method="post">
                Start Date:<input type="date" required name="startdate" value=<?php echo $poll_details['Start_date'] ?>>
                End Date:<input type="date" required name="enddate" value=<?php echo $poll_details['End_date'] ?>>
                Age Criteria: <input type="number" required name="age" value=<?php echo $poll_details['Age'] ?>>
                Rules: <textarea name="rules" id="rules" cols="70" rows="20"><?php echo $poll_details['rules'] ?>
                    </textarea>
                <button class="logregbtn" type="submit">Save Changes</button>
            </form>
            <a href="admin.php"><button class="logregbtn">Don't Save</button></a>
        </div>
        <div class="about" id="about">
            <h3>About Us</h3>
            <p>We are a small team comprised of four members. Our mission is to provide a voting system on an online platform. To achieve this, we built a free voting system that everyone can easily participate in if they are eligible for the criteria mentioned. We value reliability, precision and fast work. This allows us to work in a very agile way and implement new ideas quickly and easily. If you have any queries you can always contact us using the information mentioned below:</p>
            <p>Contact no: 02136954032 Email: onlinevotingsystem@gmail.com facebook: @ovs/facebook Twitter: @ovs/twitter</p>
        </div>
    </main>
    <footer></footer>
</body>

</html>