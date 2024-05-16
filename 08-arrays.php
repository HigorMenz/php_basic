<?php include 'includes/header.php';

//Indexed array

$cart = ['Tablet', 'Tv', 'Pc']; // $cart = array(); --- Same thing ---

echo "<pre>";
var_dump($cart);
echo "</pre>";

echo $cart[2];


$cart[3] = 'new';

//add end
array_push($cart, "Earbuds");
//add start
array_unshift($cart, "Joystick");
echo "<pre>";
var_dump($cart);
echo "</pre>";

















include 'includes/footer.php';

