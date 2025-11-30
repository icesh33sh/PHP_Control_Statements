<?php  
$name = 'Isaiah';
$price = '10,000';
$best_sellers = ['Vios', 'Fortuner', 'Land Cruiser', 'Hilux', 'Toyota 86', 'Subaru BRZ', 'Honda Civic'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Variables and Arrays</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <h1>IG CARS</h1>

    <p>You choose: <?= $best_sellers[0]; ?></p>

    <h2>Best Sellers</h2>
    <ul>
        <li><?= $best_sellers[0]; ?></li>
        <li><?= $best_sellers[1]; ?></li>
        <li><?= $best_sellers[2]; ?></li>
        <li><?= $best_sellers[3]; ?></li>
        <li><?= $best_sellers[4]; ?></li>
        <li><?= $best_sellers[5]; ?></li>
        <li><?= $best_sellers[6]; ?></li>
    </ul>

    <p>The Price of the auto you chose: $<?= $price; ?></p>

</body>
</html>
