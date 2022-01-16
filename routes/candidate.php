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
                <!-- <li>logo</li> -->
                <li><a href="#about">About Us</a></li>
                <li><a href="rules.html" target="_blank">Rules</a></li>
                <li><a href="votes.php" target="_blank">votes</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <hr>
        <h1>Candidate Dashboard</h1>
        <div class="box">
            <div class="profile">
                <center><img class="dp" src="../uploads/<?php echo $userdata['photo'] ?>" alt="profile picture"></center>
                <br><br>
                <b>Name:</b> <?php echo $userdata['firstname'] ?> <?php echo $userdata['lastname'] ?>
                <br><br>
                <b>Mobile No.:</b>
                <?php echo $userdata['mob_no'] ?>
                <br><br>
                <b>NIC No.:</b>
                <?php echo $userdata['nic_no'] ?>
                <br><br>
                <b>Address:</b>
                <?php echo $userdata['address'] ?>
                <br><br>
                <b>Status:</b>
                <?php echo $userdata['status'] ?>
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
                                <form action="#">
                                    <input type="hidden" name="gvotes" value="">
                                    <button type="submit" name="votebtn" value="Vote" id="votebtn" class="votebtn">Vote</button>
                                </form>
                            </div>
                            <hr>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
        <div class="votes"></div>
        <div class="about" id="about">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima minus dolore perspiciatis incidunt?
            Veritatis aspernatur, et at consequuntur cumque dolorum assumenda animi maiores praesentium cupiditate atque
            quasi eum unde incidunt optio voluptatem minima ullam. Eaque eius veritatis earum porro. Quos est ipsa minus
            asperiores totam soluta voluptatum esse repellendus modi.</p>
        </div>

    </main>
    <footer></footer>
</body>
</html>