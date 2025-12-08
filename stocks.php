<?php
declare(strict_types = 1);

include 'header.php';

$carproduct = [
    "Fortuner" => ["price" => 900000.00, "stock" => 18],
    "Toyota 86" => ["price" => 1000000.00, "stock" => 8],
    "Subaru BRZ" => ["price" => 220000.00, "stock" => 12],
    "Landcruiser" => ["price" => 450000.00, "stock" => 4],
    "Toyota Supra MK5" => ["price" => 15000000.00, "stock" => 14],
];

$tax_rate = 12;

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}
function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}
function get_tax_due(float $price, int $quantity, int $taxPercent = 0): float {
    $total = $price * $quantity;
    return $total * ($taxPercent / 100);
}
?>

<h2>Stock Control</h2>
<table>
    <tr>
        <th>Product</th>
        <th>Stock</th>
        <th>Re-order</th>
        <th>Total Value</th>
        <th>Tax Due (<?= $tax_rate ?>%)</th>
    </tr>

    <?php foreach ($carproduct as $product_car => $data) {
        $price = $data["price"];
        $stock = $data["stock"];
    ?>
    <tr>
        <td><?php echo $product_car ?></td>
        <td><?php echo $stock ?></td>
        <td><?php echo get_reorder_message($stock) ?></td>
        <td>₱<?php echo number_format(get_total_value($price, $stock), 2) ?></td>
        <td>₱<?php echo number_format(get_tax_due($price, $stock, $tax_rate), 2) ?></td>
    </tr>
    <?php } ?>
</table>

<?php include 'footer.php'; ?>