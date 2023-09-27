<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Forms</title>
</head>

<body class="bg-dark">
    <div class="container mt-5 ">
        <div class="row  ">
            <form method="POST" action="backend.php">
                <div class="col-lg-8 col-sm-12 mx-auto">
                    <input type="text" class="form-control shadow" placeholder="Name" required style="height: 55px;"
                        name="username">

                </div>
                <div class="col-lg-8 col-sm-12 mx-auto nm-class  mt-5">
                    <input type="text" class="form-control shadow" placeholder="Email" type="email" required style="height: 55px;"
                        name="useremail">

                </div>
                <div class="col-lg-8 col-sm-12 mx-auto nm-class mt-5">
                    <input type="text" class="form-control shadow" placeholder="Phone" required style="height: 55px;"
                        name="userphone">
                </div>
                <div class="col-lg-8 col-sm-12 mx-auto nm-class mt-5">
                    <input type="text" class="form-control shadow" placeholder="Password" required style="height: 55px;"
                        name="userpassword">
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <button class="btn btn-lg btn-secondary me-4" name="submit">
                        Sumit Data
                    </button> 
                </div>
            </form>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <?php
        if (isset($_GET["msg"])) {
            ?>
            <p class=" mt-5 text-white col-3 bg-success p-3" id="disappearing-paragraph">
                <?php echo $_GET["msg"]; ?>
            </p>
            <?php
        }else{
            echo "";
        }
        ?>
    </div>

    <script>
    function disappearParagraph() {
      var paragraph = document.getElementById("disappearing-paragraph");
      paragraph.style.display = "none";
    }
    setTimeout(disappearParagraph, 2000);
  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>