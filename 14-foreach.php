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


    foreach($products as $product){
        ?>
        <li>
            <p>Product: <?php echo $product["name"]; ?> </p>
            <p> Value: <?php echo $product["price"];?></p>
            <p>Available: <?php echo $product["available"]; ?></p>
        </li>

        <?php

    echo "<pre>";
    var_dump($product);
    echo "</pre>";

    }








include 'includes/footer.php';