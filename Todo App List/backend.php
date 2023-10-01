<?php
include "connection.php";
?>


<?php

if (isset($_POST["submit"])) {
    $taskname = $_POST["task_name"];
    $taskdesc = $_POST["task_des"];


    $run = "INSERT INTO todo_app VALUES (NULL, '$taskname' , '$taskdesc');";
    $runquery = mysqli_query($connection , $run);
    if ($runquery) {
        header("location:todo.php?msg= ");
    }
    else {
        header("location:todo.php?msg= ");
    }
}
?>