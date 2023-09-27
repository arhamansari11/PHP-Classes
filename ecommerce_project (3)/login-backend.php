<?php
include "database.php";
session_start();

if(isset($_POST["login-btn"])){
    $email = $_POST["user_login_email"];
    $password = $_POST["user_login_password"];

    $loginQuery = "SELECT * FROM users WHERE user_email = '$email' AND user_password='$password';";
    $runQuery = mysqli_query($connection, $loginQuery);
    $dataCheck = mysqli_num_rows($runQuery);

    if($dataCheck){
        $_SESSION["access"] = $email;
        header("location:dashboard.php");
    }else{
        header("location:login.php?msg=login-Failed");
    }
}
?>