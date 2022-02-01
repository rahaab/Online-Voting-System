<?php
    session_start();
    include("connect.php");

    $votes = $_POST['gvotes'];
    $total_votes= $votes+1;
    $gid = $_POST['gid'];
    $vid = $_SESSION['userdata']['voter_id'];
    $role = $_SESSION['userdata']['role'];

    $update_votes = mysqli_query($connect, "UPDATE candidate SET vote_count='$total_votes' WHERE cand_id='$gid'");
    $update_voter_status = mysqli_query($connect, "UPDATE voter SET status='Voted' WHERE voter_id='$vid'");

    if($update_voter_status and $update_votes){
        $candidate = mysqli_query($connect, "SELECT * FROM candidate");
        $candidatedata = mysqli_fetch_all($candidate, MYSQLI_ASSOC);

        $_SESSION['candidatedata'] = $candidatedata;
        $_SESSION['userdata']['status'] = "Voted";

         if ($role=='voter'){
            echo '<script>
                alert("Voting successful!");
                window.location = "../routes/voter.php";
            </script>';
        }
            
        else{
            echo '
            <script>
                alert("Voting successful!");
                window.location = "../routes/candidate.php";
            </script>
            ';
            }
    }
    else{
        if ($role=='voter'){
            echo '<script>
                alert("Voting failed! Try Again.");
                window.location = "../routes/voter.php";
            </script>';
        }
            
        else{
            echo '
            <script>
                alert("Voting failed! Try Again");
                window.location = "../routes/candidate.php";
            </script>
            ';
            }
    }
    
?>