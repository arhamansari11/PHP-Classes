<?php
include "connection.php";
?>
<?php
if ($_GET["task_id"]) {
    $updID = $_GET["task_id"];
    $selectQuery = "SELECT * FROM todo_app WHERE task_id='$updID';";
    $runQuery = mysqli_query($connection, $selectQuery);
    $row = mysqli_fetch_assoc($runQuery);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="download.png">
    <title>Update Task</title>
</head>

<body style="background-color: gray;">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="heading" align="center" style="color :  rgba(255, 255, 255, 0.785);">Todo App</h1>
                <hr>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-center">
        <div class="row ">
            <div class="col-12 mx-auto">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <h6 align="center">Are you want to update task?</h6>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Are You want to update task?</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post">
                                    <div class="mb-3">
                                        <label class="form-label">Task Name</label>
                                        <input type="text" placeholder="Enter The Task" class="form-control"
                                            name="task_name" value="<?php echo $row['task_name']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label ">Task description</label>
                                        <input type="text" placeholder="Enter The Description" class="form-control"
                                            name="task_des" value="<?php echo $row['task_description']; ?>">
                                    </div>
                                    <button type="submit" class="btn btn-success" name="upddata">Update</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>

<?php
    if (isset($_POST["upddata"])) {
        $taskname = $_POST['task_name'];
        $taskdesc = $_POST['task_des'];
        $updQuery = "UPDATE todo_app SET task_name='$taskname', task_description='$taskdesc' where task_id='$updID';";
        $runQuery = mysqli_query($connection, $updQuery);
        if ($runQuery) {
            header("location:todo.php?messag = ");
        } else {
            header("location:todo.php?messag = ");

        }

    }
    ?>