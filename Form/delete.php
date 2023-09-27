<?php
include "connectsql.php";

if (isset($_GET["user_id"])) {
    $user_id = $_GET["user_id"];
    $deletequery = "DELETE FROM form_users WHERE user_id = '$user_id';";
    $deletesql = mysqli_query($connection , $deletequery);

    if ($deletesql) {
        header("location:fetch.php?mesg=User Deleted");
    }
    else{
        header("location:fetch.php?mesg=Unexpected Error");
    }
}



?>