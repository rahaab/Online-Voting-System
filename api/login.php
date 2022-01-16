<?php
session_start();
include("connect.php");

$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];


if ($role=='voter'){
    $check = mysqli_query($connect,"SELECT * from voter WHERE email='$email' AND pswd='$password'");
}
elseif($role=='candidate'){
    $check = mysqli_query($connect,"SELECT * from candidate WHERE email='$email' AND pswd='$password'");
}
elseif($role=='admin'){
    $check = mysqli_query($connect,"SELECT * from admin WHERE email='$email' AND pswd='$password'");
}

if (mysqli_num_rows($check)>0) {
	$userdata = mysqli_fetch_array($check);
	$candidate = mysqli_query($connect, "SELECT * FROM candidate");
	$candidatedata = mysqli_fetch_all($candidate, MYSQLI_ASSOC);

	$_SESSION['userdata'] = $userdata;
	$_SESSION['candidatedata'] = $candidatedata;

    if ($role=='voter'){
        echo '
        <script>
            window.location = "../routes/voter.php";
        </script>
    ';
    }

    elseif ($role=='candidate'){
        echo '
        <script>
            window.location = "../routes/candidate.php";
        </script>
    ';
    }

    elseif ($role=='admin'){
        echo '
        <script>
            window.location = "../routes/admin.php";
        </script>
    ';
    }

}
else{
	echo '
            <script>
                alert("Invalid Credentials");
                window.location = "../";
            </script>
        ';
}


?>