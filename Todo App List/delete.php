<?php

include "connection.php";
?>

<?php
if (isset($_GET["task_id"])) {
    $taskid = $_GET["task_id"];
    $deletequery = "DELETE FROM todo_app WHERE task_id = '$taskid';";
    $runsql = mysqli_query($connection, $deletequery);
    if ($runsql) {
        header("location:todo.php?message = ");
    } else {
        header("location:todo.php?message = ");
    }
}




?>