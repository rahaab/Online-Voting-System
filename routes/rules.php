<?php
session_start();
include("../api/connect.php");

$rules = mysqli_query($connect,"SELECT * FROM poll");
$rule = mysqli_fetch_array($rules);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css">
    <title>Online Voting System - Rules</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karma:wght@600&display=swap" rel="stylesheet">
</head>

<body>
    <div class='rules'>
        <h2>Rules</h2>
        <div class="text">
            <?php echo $rule['rules'] ?>
        </div>

    </div>
</body>

</html>