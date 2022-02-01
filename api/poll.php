<?php
    session_start();
    include("connect.php");

    $start_date = date_create($_POST['startdate']);
    $start_date=date_format($start_date,"Y-m-d");
    $end_date = date_create($_POST['enddate']);
    $end_date=date_format($end_date,"Y-m-d");
    $age = $_POST['age'];
    $rules = $_POST['rules'];

    $update_candidates = mysqli_query($connect, "DELETE FROM candidate");
    $update_voter_status = mysqli_query($connect, "UPDATE voter SET status='Not Voted'");
    $clear_poll = mysqli_query($connect, "DELETE FROM poll");
    $update_poll = mysqli_query($connect, "INSERT INTO poll (Start_date, End_date, Age, rules) VALUES ('$start_date','$end_date','$age', '$rules')");

    if($update_voter_status and $update_candidates){
        echo '<script>
            alert("Poll created successfully!");
            window.location = "../routes/admin.php";
        </script>';
    }
    else{
        echo '<script>
            alert("Poll creation failed! Try Again.");
            window.location = "../routes/admin.php";
        </script>';
    }
    
?>