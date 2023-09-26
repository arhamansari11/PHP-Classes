<?php 
include "database.php";
?>

<?php
$selectQuery = "SELECT * FROM users;";
$result = mysqli_query($connection, $selectQuery);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>All Records</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body class="bg-light">
    <div class="col-12 p-0">
        <h2 class="mt-5 text-center p-0">RECORDS</h2>
    </div>

    <div class="col-8 mx-auto mt-4">
        <table class="table">
            <thead>
                <tr class="table-dark">
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>

            <?php
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <th class="pt-4" scope="row"><?php echo $row["user_id"]?></th>
                    <td class="pt-4"><?php echo $row["user_name"]?></td>
                    <td class="pt-4"><?php echo $row["user_dob"]?></td>
                    <td class="pt-4"><?php echo $row["user_email"]?></td>
                    <td class="pt-4"><?php echo $row["user_password"]?></td>
                    <td class="pt-4"><a href="update-backend.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-success">Update</a></td>
                    <td class="pt-4"><a href="delete-backend.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>