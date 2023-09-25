<?php

if(isset($_POST["submitData"])){
    // echo "Hello";
    $userEmail = $_POST["userEmail"];
    $userPassword = $_POST["userPassword"];

    // Database command to store data

    header("location: class04.php?msg=Thank you for contact");
}

?>