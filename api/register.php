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
    $role = $_POST['role'];

    if ($password==$cpassword){
        $check_nic = mysqli_query($connect, "SELECT * from voter v, candidate c WHERE v.nic_no = '$nicno' OR c.nic_no = '$nicno'");
        if (mysqli_num_rows($check_nic)>0) {
            echo '
            <script>
                alert("User with this NIC already exists!");
                window.location = "../";
            </script>
        ';
        }
        else{
            move_uploaded_file($tmp_name, "../uploads/$image");
            if ($role == 'voter'){
                $insert = mysqli_query($connect, "INSERT INTO voter (firstname, lastname, mob_no, nic_no, email, pswd, photo, address,status, role) VALUES ('$fname','$lname','$mobno','$nicno','$email','$password','$image','$address','Not Voted','$role')");
            }
            elseif ($role == 'candidate'){
                $insert = mysqli_query($connect, "INSERT INTO candidate (firstname, lastname, mob_no, nic_no, email, pswd, photo, address,status, vote_count, role) VALUES ('$fname','$lname','$mobno','$nicno','$email','$password','$image','$address','Not Voted',0,'$role')");
            }
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