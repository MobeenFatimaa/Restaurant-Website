<?php

session_start();

if(!isset($_SESSION['username'])){
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>

  <style>

    body{
      margin:0;
      padding:0;
      font-family:Arial;
      background:#111;
      color:white;
      text-align:center;
    }

    .container{
      margin-top:100px;
    }

    h1{
      font-size:50px;
      color:#ff9800;
    }

    p{
      font-size:20px;
    }

    a{
      display:inline-block;
      margin-top:30px;
      padding:12px 25px;
      background:#ff9800;
      color:white;
      text-decoration:none;
      border-radius:10px;
      font-size:18px;
    }

    a:hover{
      background:#e68900;
    }

  </style>

</head>
<body>

<div class="container">

  <h1>
    Welcome,
    <?php echo $_SESSION['username']; ?>
  </h1>

  <p>You have successfully logged into Spice Bites Restaurant 🍕</p>

  <a href="logout.php">Logout</a>

</div>

</body>
</html>