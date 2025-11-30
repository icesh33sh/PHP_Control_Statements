<?php 
$item = 'Fortuner';
$stock = 5;
$wanted = 2;
$deliver = true;
$can_buy = ($wanted <= $stock) && ($deliver == true);
?>

<?php include 'header.php'; ?>
    <h1>IG CARS</h1>
        <h2>Available Units</h2>
        <p>Item: <?= $item; ?></p>
        <p>Stock: <?= $stock; ?></p>
        <p>Wanted: <?= $wanted; ?></p>
        <p>Can Buy: <?= $can_buy; ?></p>
    <?php include 'footer.php'; ?>