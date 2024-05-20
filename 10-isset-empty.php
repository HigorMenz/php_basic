<?php include 'includes/header.php';

$user = [];
$users = ['Higor', 'Dilson', 'Adriana'];

$user2 = [
    'name' => 'Higor',
    'balance' => 200
];
// empty --> Determine if an array is empty
var_dump(empty($users));
var_dump(empty($user));

echo "<br>";

//isset --> Determine if an array is instantiated or if a property is set
var_dump(isset($users[3]));
var_dump(isset($users[2]));

echo "<br>";

var_dump(isset($user2['name']));
var_dump(isset($user2['type']));

include 'includes/footer.php';
