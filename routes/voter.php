<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location: ../");
}

$userdata = $_SESSION['userdata'];
$candidatedata = $_SESSION['candidatedata'];
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
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <hr>
        <h1>Voter Dashboard</h1>
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
                                <form action="../api/vote.php" method="POST">
                                    <input type="hidden" name="gvotes" value="<?php echo $candidatedata[$i]['vote_count'] ?>">
                                    <input type="hidden" name="gid" value="<?php echo $candidatedata[$i]['cand_id'] ?>">
                                    <?php
                                    if ($_SESSION['userdata']['status']=="Not Voted"){?>
                                    <button type="submit" name="votebtn" value="Vote" id="votebtn" class="votebtn">Vote</button>
                                    <?php
                                    }
                                    else{
                                        ?>
                                        <button disabled type="button" name="votebtn" value="Vote" id="votebtn" class="votedbtn">Voted</button>
                                        <?php
                                    }
                                    ?>
                                </form>
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
