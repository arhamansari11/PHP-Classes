<?php
$arr = array(1,2,3,4);

// var_dump($arr);
// echo "<br/>";
// print_r($arr);


// $str = "Hello World";

// echo "<pre>";

// Math and String Methods
// echo strlen($str);
// echo "<br/>";
// echo str_word_count($str);
// echo "<br/>";
// echo str_replace("wold", "world", "Hello wold!");
// echo "<br/>";




// echo pi();
// echo "<br/>";
// echo rand();

// define("c1", "hello");

// echo c1;

// define("c2", "world");

// echo "<br/>";
// echo "<br/>";

// echo c2;

// echo "</pre>";

// if(10<3){
//     echo "Hello This is true";
// } else {
//     echo "Hello This is false";
// }

for($i = 10; $i > 0; $i--){
    echo "<pre>";
    echo $i;
    echo "<br />";
    echo "</pre>";
}

$colors = array("red", "orange", "blue", "green", "yellow");

foreach($colors as $singleValue){
    echo $singleValue . "<br />";
};

function sum($a,$b){
    echo $a+$b;
};

sum(10,30);

echo date("Y-m-d");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
&copy; 2010-<?php echo date("m.y");?>
</body>
</html>