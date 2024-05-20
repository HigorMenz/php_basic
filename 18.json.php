<?php include 'includes/header.php';

$products = [
    [
        "name" => "Tablet",
        "price" => 300,
        "available" => true
    ],
    [
        "name" => "Iphone",
        "price" => 800,
        "available" => false
    ],
    [
        "name" => "lamp rgb",
        "price" => 50,
        "available" => true
    ]
];

echo "<pre>";
var_dump($products);

$json = json_encode($products, JSON_UNESCAPED_UNICODE); //array to string

$json_array = json_decode($json); // string to array
var_dump($json);
var_dump($json_array);

echo "</pre>";




include 'includes/footer.php';
