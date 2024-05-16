<?php include 'includes/header.php';

$users = [
    'name' => 'Higor',
    'balance' => 200,
    'info' => [
        'type' => 'premium'
    ]
];


echo "<pre>";
var_dump($users);

echo "</pre>";

echo $users['name'];
echo "<br>";
echo $users['balance'];
echo "<br>";
echo $users['info']['type'];




include 'includes/footer.php';
