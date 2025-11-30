<?php
$quantity_string = "3";     
$price_number = 1500000;    
$unit = "Toyota 86";

$total_cost = $quantity_string * $price_number;
?>


    <?php include 'header.php'; ?>


    
    

    <p>Unit: <?= $unit; ?></p>

    <p>Quantity: <?= $quantity_string; ?></p>
    <p>Price: <?= $price_number; ?></p>

    <p><strong>Total Cost:</strong> <?= $total_cost; ?></p>

<?php include 'footer.php'; ?>
   