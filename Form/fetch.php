<?php
include "connectsql.php";
?>
<?php
$slect = "SELECT * FROM form_users";
$query = mysqli_query($connection, $slect);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">User Id</th>
                            <th scope="col">User Name</th>
                            <th scope="col">User Email</th>
                            <th scope="col">User Phone</th>
                            <th scope="col">User Password</th>
                            <th scope="col">Delete User</th>
                            <th scope="col">Update User</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $row["user_id"] ?>
                                </th>
                                <td>
                                    <?php echo $row["user_name"] ?>
                                </td>
                                <td>
                                    <?php echo $row["user_email"] ?>
                                </td>
                                <td>
                                    <?php echo $row["user_phone"] ?>
                                </td>
                                <td>
                                    <?php echo $row["user_password"] ?>
                                </td>
                                <td><a href="update.php?user_id=<?php echo $row['user_id'];?>" class="btn btn-success">Update</a></td>
                                <td><a href="delete.php?user_id=<?php echo $row['user_id'];?>"
                                        class="btn btn-danger">Delete
                                        User</a></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    <?php
                    if (isset($_GET["mesg"])) {
                        ?>
                        <p class=" mt-5 text-white col-3 bg-danger p-2" id="disappearing-paragraph">
                            <?php echo $_GET["mesg"] ?>
                        </p>
                        <?php
                    } else {
                        echo "";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        function disappearParagraph() {
            var paragraph = document.getElementById("disappearing-paragraph");
            paragraph.style.display = "none";
        }
        setTimeout(disappearParagraph, 2000);
    </script>
</body>

</html>