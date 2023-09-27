<!-- INSERT INTO form_users VALUES (NULL , "Arham" , "arham@gmail.com" , "03007633734" , "123"); -->


<?php

include "connectsql.php";
?>

<?php


if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $useremail = $_POST["useremail"];
    $userphone = $_POST["userphone"];
    $userpassword = $_POST["userpassword"];

    $insertkey = "INSERT INTO form_users VALUES (NULL , '$username' , '$useremail' , '$userphone' , '$userpassword');";
    $runquery = mysqli_query($connection , $insertkey);

    if ($runquery) {
        header("location:form.php?msg=Submit Data Successfully");
    }
    else{
        header("location:form.php?msg=Unable to Submit Data ");        
    }

}



?>