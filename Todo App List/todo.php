<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="download.png">
    <link rel="stylesheet" href="style.css">
    <title>Todo App</title>
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
                    <h6 align="center">Add Task</h6>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Are You want to add task?</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="backend.php" method="post">
                                    <div class="mb-3">
                                        <label class="form-label">Task Name</label>
                                        <input type="text" placeholder="Enter The Task" class="form-control"
                                            name="task_name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label ">Task description</label>
                                        <input type="text" placeholder="Enter The Description" class="form-control"
                                            name="task_des">
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="submit">Add</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="d-flex justify-content-center mt-4">
        <?php
        if (isset($_GET["msg"])) {
            ?>
            <p class="" id="disappearing-paragraph">
                <?php echo $_GET["msg"]; ?>
            </p>
            <?php
        } else {
            echo "";
        }
        ?>
    </div>
    <?php
    include "connection.php";
    ?>
    <?php
    $fetchdata = "SELECT * FROM todo_app";
    $selectquery = mysqli_query($connection, $fetchdata);
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 mx-auto mt-5">
                <table class="table">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">Task No:-</th>
                            <th scope="col">Task Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody class="table-warning">
                        <?php
                        while ($row = mysqli_fetch_assoc($selectquery)) {
                            ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $row["task_id"] ?>
                                </th>
                                <td>
                                    <?php echo $row["task_name"] ?>
                                </td>
                                <td>
                                    <?php echo $row["task_description"] ?>
                                </td>
                                <td class=""><a class="icon1-class"
                                        href="update.php?task_id=<?php echo $row["task_id"]; ?>"><i
                                            class="fa-sharp fa-solid fa-pen-to-square "></i></a>
                                </td>
                                <td class="icon-class"><a href="delete.php?task_id=<?php echo $row["task_id"]; ?>"><i
                                            class="fa-solid fa-trash"></i></a></td>
                            </tr>
                            <?php
                        }
                        ?>
                        <?php
                        if (isset($_GET["message"])) {
                            ?>
                            <p>
                                <?php echo ""; ?>
                            </p>
                            <?php
                        } else {
                            echo "";
                        }
                        ?>
                        <?php
                        if (isset($_GET["messag"])) {
                            ?>
                            <p>
                                <?php echo ""; ?>
                            </p>
                            <?php
                        } else {
                            echo "";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>











    </div>

    <script>
        function disappearParagraph() {
            var paragraph = document.getElementById("disappearing-paragraph");
            paragraph.style.display = "none";
        }
        setTimeout(disappearParagraph, 1000);
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>