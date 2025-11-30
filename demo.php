<?php
$quantity_string = "3";     
$price_number = 1500000;    
$unit = "Toyota 86";

$total_cost = $quantity_string * $price_number;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Type Juggling</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>

    <h1>IG CARS</h1>
    

    <p>Unit: <?= $unit; ?></p>

    <p>Quantity: <?= $quantity_string; ?></p>
    <p>Price: <?= $price_number; ?></p>

    <p><strong>Total Cost:</strong> <?= $total_cost; ?></p>

    </body>
</html>
