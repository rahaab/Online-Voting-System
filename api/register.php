<?php
    include("connect.php");

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobno = $_POST['mobno'];
    $nicno = $_POST['nic'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confpwd'];
    $image = $_FILES['myImage']['name'];
    $tmp_name = $_FILES['myImage']['tmp_name'];

    if ($password==$cpassword){
         move_uploaded_file($tmp_name, "../uploads/$image");
         $insert = mysqli_query($connect, "INSERT INTO voter (firstname, lastname, mob_no, nic_no, email, pswd, photo, address,status, role) VALUES ('$fname','$lname','$mobno','$nicno','$email','$password','$image','$address','Not Voted','voter')");
         if ($insert) {
            echo '
            <script>
                alert("Registeration Succesful!");
                window.location = "../";
            </script>
        ';
        }
         else {
            echo '
            <script>
                alert("Some error occured!");
                window.location = "../routes/register.html";
            </script>
        ';
        }
    }
    else{
        echo '
            <script>
                alert("Passwords do not match!");
                window.location = "../routes/register.html";
            </script>
        ';
    }



?>
