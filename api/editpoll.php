<?php
    session_start();
    include("connect.php");

    $start_date = date_create($_POST['startdate']);
    $start_date=date_format($start_date,"Y-m-d");
    $end_date = date_create($_POST['enddate']);
    $end_date=date_format($end_date,"Y-m-d");
    $age = $_POST['age'];
    $rules = $_POST['rules'];

    $update_poll = mysqli_query($connect, "UPDATE poll SET start_date='$start_date', End_date='$end_date', Age='$age', rules='$rules'");

    if($update_poll){
        echo '<script>
            alert("Poll updated successfully!");
            window.location = "../routes/admin.php";
        </script>';
    }
    else{
        echo '<script>
            alert("Poll updation failed! Try Again.");
            window.location = "../routes/admin.php";
        </script>';
    }
    
?>