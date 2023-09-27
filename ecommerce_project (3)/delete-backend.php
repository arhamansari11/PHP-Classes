<?php

include "database.php";

if(isset($_GET["user_id"])){
    $user_id = $_GET["user_id"];
    $deleteQuery = "DELETE FROM users WHERE user_id = '$user_id';";
    $runQuery = mysqli_query($connection, $deleteQuery);
    header("location:records.php?msg=User Deleted");
} else {
    echo "User Not Deleted";
}

?>