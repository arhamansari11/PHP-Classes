<?php
include "connectsql.php";

if (isset($_GET["user_id"])) {

   $updId=$_GET["user_id"];
   $selectQuery="SELECT * FROM form_users WHERE user_id='$updId'";
   $runQuery=mysqli_query($connection, $selectQuery);
   $row=mysqli_fetch_assoc($runQuery);
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Update Form</title>
</head>

<body class="bg-dark">
    <div class="container mt-5 ">
        <div class="row  ">
            <form method="POST">
                <div class="col-lg-8 col-sm-12 mx-auto">
                    <input type="text" class="form-control shadow"required style="height: 55px;"
                        name="username" value="<?php echo $row['user_name'];?>">

                </div>
                <div class="col-lg-8 col-sm-12 mx-auto nm-class  mt-5">
                    <input type="text" class="form-control shadow" placeholder="Email" type="email" required style="height: 55px;"
                        name="useremail" value="<?php echo $row['user_email'];?>">

                </div>
                <div class="col-lg-8 col-sm-12 mx-auto nm-class mt-5">
                    <input type="text" class="form-control shadow" placeholder="Phone" required style="height: 55px;"
                        name="userphone" value="<?php echo $row['user_phone'];?>">
                </div>
                <div class="col-lg-8 col-sm-12 mx-auto nm-class mt-5">
                    <input type="text" class="form-control shadow" placeholder="Password" required style="height: 55px;"
                        name="userpassword" value="<?php echo $row['user_password'];?>">
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <button class="btn btn-lg btn-secondary me-4" name="updData">
                        Update Data
                    </button> 
                </div>
            </form>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
if(isset($_POST["updData"])){
$username=$_POST['username'];
$useremail=$_POST['useremail'];
$userphone=$_POST['userphone'];
$userpassword=$_POST['userpassword'];
$updQuery="UPDATE form_users SET user_name='$username', user_email='$useremail', 
user_phone='$userphone', user_password='$userpassword' where user_id='$updId'";
$runQuery=mysqli_query($connection, $updQuery);
if($runQuery){
    header("Location:fetch.php");
}
else{
    header("Location:update.php");

}

}
?>