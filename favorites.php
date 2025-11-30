<?php 
$name = 'Isaiah';
$favorites = ['Vios', 'Fortuner', 'Land Cruiser', 'Hilux', 'Toyota 86', 'Subaru BRZ', 'Honda Civic'];
?>


 <?php include 'header.php'; ?>
    <h2><?= $name;?>, please select the flower you will order:</h2>
        <h1>IG CARS</h1>
        <h2>Welcome <?= $name;?>!</h2>

        <p>Your favorite car is:
            <?= $favorites[4]; ?>.</p>
            
    <?php include 'footer.php'; ?>