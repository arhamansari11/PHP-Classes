<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Register Now</title>
</head>

<body>
    <div class="col-8 p-4 bg-dark text-white rounded-2">
        <form method="POST" action="register-backend.php">
            <div class="row">
                <div class="mb-4 col-6">
                    <label class="form-label">Name</label>
                    <input name="userName" type="text" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-4 col-6">
                    <label class="form-label">Email</label>
                    <input name="userEmail" type="email" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="mb-4 col-6">
                    <label class="form-label">Phone</label>
                    <input name="userPhone" type="number" class="form-control">
                </div>
                <div class="mb-4 col-6">
                    <label class="form-label">Address</label>
                    <input name="userAddress" type="text" class="form-control">
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label">DOB</label>
                <input name="userDOB" type="date" class="form-control">
            </div>
            <div class="mb-4 position-relative">
                <label class="form-label">Password</label>
                <input name="userPassword" type="password" class="form-control">
                <i class="fa-solid fa-eye eye-icon"></i>
            </div>
            <button type="submit" name="register-btn" class="btn btn-primary mt-3">Register</button>
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
    <script src="app.js"></script>
</body>

</html>