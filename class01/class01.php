<?php

// Printing
echo "<h1>Hello World</h1>";
echo "Hello World <br/>";
echo "Hello World";

echo "<br/><br/><br/>";
# Variables:

// $greeting = "Hello ";
// $userName = "Adil";

// echo $greeting . $userName;


/* Mu
lti
line */

// Data Types:


// $userName = "Adil ";
// $grade = 20;
// $floatGrade = 20.4444;
// $boolean = true;
// $nullDataType = null;
// echo $userName, $grade, " ",  $floatGrade, " ", $boolean, " ", $nullDataType;

// Arrays

// $cities = array("FSD", "ISB", "RWP", "LHR");
// echo $cities[0], " ", $cities[2];

// Associative Array:

$studentsMarks = array(
    "a" => 20,
    "b" => 30,
    "c" => 40,
    "d" => 50,
);


$arr1 = array(
    "b" => array(3,4),
    "a" => array(1,2),
);

asort($arr1);

var_dump($arr1)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Class</title>
</head>
<body>
    <h1><?php echo $studentsMarks["a"], " ", $studentsMarks["b"];?></h1>
    <h1><?php echo $studentsMarks["a"], " ", $studentsMarks["b"];?></h1>
</body>
</html>