<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location: ../");
}

$userdata = $_SESSION['userdata'];
$candidatedata = $_SESSION['candidatedata']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styledashboard.css">
    <title>Online Voting System - Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karma:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <img class="logo" src="logonew.png" alt="">
            <ul>
                <li><a href="#about">About Us</a></li>
                <li><a href="rules.php" target="_blank">Rules</a></li>
                <li><a href="votesgraph.php" target="_blank">Votes</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <hr>
        <h1>Admin Dashboard</h1>
        <div class="buttons">
            <a href="create_poll.html"><button class="adminbtn">Create Poll</button></a>
            <a href="editpoll_page.php"><button class="adminbtn">Edit Poll</button></a>
        </div>
        <div class="candidates">
        <h2>Candidates</h2>
        <hr>
        <?php
                if($_SESSION['candidatedata']){
                    for ($i=0; $i<count($candidatedata); $i++){
                        ?>
                            <div class="slots">
                                <img class="candidatedp" src="../uploads/<?php echo $candidatedata[$i]['photo'] ?>" alt="">
                                <b>Candidate Name:</b> <?php echo $candidatedata[$i]['firstname'] ?> <?php echo $candidatedata[$i]['lastname'] ?>
                            </div>
                        <hr>
                        <?php
                    }
                }
            ?>
        </div>
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