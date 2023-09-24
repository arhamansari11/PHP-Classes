<?php

// echo "Hello";
// $username = "umer";
// echo "<br/>";
// echo ($username);
// echo "<br/>";
// echo "$username";
// echo "<br/>";
// echo $username;


$age = 30;
$age1 = 20;
$age2 = 10;
$age3 = 60;
$age4 = 80;
$x = "x";
$y = "y";
// echo $age;

function printing()
{
    // global $age, $age1, $age2, $age4;
    // echo $age4;
    echo $GLOBALS['age'], $GLOBALS['age3'];
};

printing();

function sum()
{
    static $x = 1;
    $x++;
    echo $x;
};

echo "<pre>";
// sum();
// echo "<br/>";
// sum();
// echo "<br/>";
// sum();
// echo "<br/>";
// sum();

echo "</pre>";
// echo $GLOBALS['age'];
// echo $_SERVER['SERVER_NAME'];
// echo $_SERVER['HTTP_HOST'];
// echo $_SERVER['HTTP_USER_AGENT'];
echo $_SERVER['PHP_SELF'];
?>

<?php
if ($_SERVER['PHP_SELF'] == "/php6/Class03/class03.php") {
?>
    <script>
        document.querySelector("body").style.background = "lightgreen";
    </script>
<?php
} else {
?>
    <script>
        document.querySelector("body").style.background = "red";
    </script>
<?php
}

echo "<pre>";
echo readfile("hello.txt");
echo "</pre>";

// echo rmdir("test");
?>