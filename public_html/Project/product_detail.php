<?php
require(__DIR__ . "/../../partials/nav.php");

$db = getDB();

$item = [];
$stmt = $db->prepare("SELECT id, name, description, cost, stock, image FROM Products WHERE stock > 0 LIMIT 50");

//"SELECT id, name, description, cost, stock, image FROM Products WHERE stock > 0 LIMIT 50"
try {
    $stmt->execute();
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $item = $r;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error fetching items", "danger");
}

?>

<div class="container-fluid">
    <h1>Product Details</h1>
    <table class="table table-striped">
        <?php $total = 0; ?>
        <thead>
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Category</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($item as $c) : ?>
            <tr>
                <td><?php se($c, "name"); ?></td>
                <td><?php se($c, "cost"); ?></td>
                <td><?php se($c, "stock"); ?></td>
                <td><?php se($c, "category"); ?></td>
                <td><?php se($c, "description"); ?></td>
                
            <?php endforeach; ?>

            <?php
require(__DIR__ . "/../../partials/flash.php");
?>