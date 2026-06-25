<?php

include "db.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users(username,email,password)
VALUES('$username','$email','$hashedPassword')";

if(mysqli_query($conn,$sql)){

    echo "
    <script>
      alert('Signup Successful');
      window.location.href='index.php';
    </script>
    ";

}else{

    echo "
    <script>
      alert('Signup Failed');
      window.location.href='index.php';
    </script>
    ";

}

?>