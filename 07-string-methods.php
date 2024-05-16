<?php include 'includes/header.php';

$customerName = "Higor Menzinger";

//string length
echo strlen($customerName);
var_dump($customerName);
echo ("<br>");

//remove white spaces
$text = trim($customerName);
echo strlen($text);
echo ("<br>");
//strtoupper || strtolower
echo strtoupper($customerName);
echo ("<br>");
//replace
echo str_replace('Higor', 'H', $customerName);
echo ("<br>");
//concat
echo "User: " . $customerName;
echo ("<br>");
echo "User: {$customerName}";

include 'includes/footer.php';