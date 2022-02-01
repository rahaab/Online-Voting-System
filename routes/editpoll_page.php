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
    </main>
    <footer></footer>
</body>

</html>