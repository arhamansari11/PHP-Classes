<?php
include "database.php";
session_start();

if($_SESSION["access"]){
    session_destroy();
    header("location:login.php?msg=logout-successfully");
} else {
    header("location:login.php?msg=Don't try to enter illegally");
}

?>