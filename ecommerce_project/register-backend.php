<?php
include "database.php";
?>

<?php

if(isset($_POST["register-btn"])){
    $userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];
    $userPhone = $_POST["userPhone"];
    $userAddress = $_POST["userAddress"];
    $userDOB = $_POST["userDOB"];
    $userPassword = $_POST["userPassword"];

    // Database Working
    $insertQuery = "INSERT INTO users VALUES(NULL, '$userName', '$userDOB', '$userEmail','$userPassword');";
    $runQuery = mysqli_query($connection, $insertQuery);

    if($runQuery){
        header("location:register.php?msg=Registration Successful");
    } else {
        header("location:register.php?msg=Registration Failed");
    }
}


?>