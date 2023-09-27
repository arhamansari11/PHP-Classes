<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Signup</title>
</head>

<body>
    <div class="col-4 bg-dark rounded-2 mx-auto mt-5 p-5">
        <div class="row">
            <h2 class="text-center text-white mb-5">Login Here!</h2>
        </div>
        <form action="login-backend.php" method="POST">
            <div class="row">
                <div class="mb-4 col-11 mx-auto">
                    <input type="email" name="user_login_email" placeholder="Email" class="form-control py-2" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
            </div>
            <div class="row">
                <div class="mb-4 col-11 mx-auto">
                    <input type="password" name="user_login_password" placeholder="Password" class="form-control py-2" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary col-11 d-block mx-auto" name="login-btn">Login</button>
        </form>

        <?php
        if(isset($_GET["msg"])){
            ?>
            <p class="w-100 bg-info p-2 mt-5 rounded-2 text-dark fw-semibold">
                <?php echo $_GET["msg"]; ?>
            </p>
        <?php
        } else {
            echo "";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>