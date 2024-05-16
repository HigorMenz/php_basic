<?php include 'includes/header.php';

//same as in other languages

$num1 = 1;

$num2 = 2;

$num3= 3;

//return -1 left smaller, 0 equals, 1 left greater 
var_dump($num1 <=> $num2);
var_dump($num2 <=> $num2);
var_dump($num3 <=> $num2);


include 'includes/footer.php';