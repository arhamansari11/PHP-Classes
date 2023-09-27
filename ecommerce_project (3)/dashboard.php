<?php

include "database.php";
session_start();

if($_SESSION["access"]){
    echo "";
} else {
    header("location:login.php?msg=Don't try to enter illegally");
}

$userEmail = $_SESSION["access"];
$nameQuery = "SELECT user_name FROM users WHERE user_email = '$userEmail'";
$runQuery = mysqli_query($connection,$nameQuery);

$data = mysqli_fetch_assoc($runQuery);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: green;
        }
    </style>
</head>
<body>
    <h1>Welcome <?php echo $data["user_name"]; ?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>