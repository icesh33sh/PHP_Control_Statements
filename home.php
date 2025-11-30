<?php  
    $name = '';
    $price = '26';
    $best_sellers = ['Toyota 86', 'Land Cruiser', 'Fortuner'];
    $other_options = ['Subaru BRZ', 'Toyota Supra', 'Nissan Skyline'];
    $greeting = 'Hello, Welcome to IG CARS';
    $stock = 0;
    $day = 'Monday';

    if ($name !== '') {
        $greeting = 'Welcome back, ' . $name;
    }

    if ($stock > 0) {
        $message = "In stock: $stock cars available";
    } else {
        $message = "Out of stock";
    }


    $list_output = "";
    foreach ($best_sellers as $cars) {
        $list_output .= "<p>$cars</p>";
    }

    $selected_car = $best_sellers[0]; 
    switch ($selected_car) {
        case 'Toyota 86':
            $availability_message = "Toyota 86 are always popular! " . $message;
            break;
        case 'Subaru BRZ':
            $availability_message = "BRZ bring loverboy vibes. " . $message;
            break;
        case 'Land Cruiser':
            $availability_message = "Land Cruiser are good for family car. " . $message;
            break;
        default:
            $availability_message = "Selected car availability: " . $message;
    }

    $customer_options = "";
    foreach ($other_options as $cars) {
        $customer_options .= "<li>$cars</li>";
    }
?>
<?php include 'header.php'; ?>
    <h2><?= $greeting ?>!</h2>
    
    <h2>Best Sellers</h2>
    <?= $list_output ?>

    <h2>Customer Selection</h2>
    <p>Among the best-selling cars, which is the best for you?</p>
    <p>You selected: <?= $selected_car ?></p>
    <p>Availability: <?= $availability_message ?></p>
    
   

    <h2>Other Options:</h2>
    <ul>
        <?= $customer_options ?>
    </ul>

<?php include 'footer.php'; ?>
