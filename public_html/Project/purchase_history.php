<?php
require(__DIR__ . "/../../partials/nav.php");

is_logged_in(true);
$query = "SELECT order.order_id, order.item_id, order.quantity, order.cost
FROM Orders as item JOIN OrderItems as order on order.id = order.order_id
 WHERE order.user_id = :uid";
$db = getDB();
$stmt = $db->prepare($query);
$cart = [];
try {
    $stmt->execute([":uid" => get_user_id()]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($results) {
        $cart = $results;
        
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error fetching order history", "danger");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
    background-color: rgb(199, 188, 222);
    

}

</style>
</head>


<div class="container-fluid">
    <h1>Order History</h1>
    <table class="table table-striped">
        <?php $total = 0; ?>
        <thead>
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                
            </tr>
        </thead>
        <tbody>
        <?php foreach ($cart as $c) : ?>
            <tr>
                <td><?php se($c, "name"); ?></td>
                <td><?php se($c, "unit_price"); ?></td>

                <td>
                <?php se($c, "desired_quantity"); ?>
                </td>
                <?php $total += (int)se($c, "subtotal", 0, false); ?>
                <td><?php se($c, "subtotal"); ?></td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="cart_id" value="<?php se($c, "id"); ?>" />
                        <input type="hidden" name="action" value="delete" />
                         
                        <a href="order_info.php?item_id=<?php se($item, "id"); ?>">Details</a>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        <?php if (count($cart) == 0) : ?>
            <tr>
                <td colspan="100%">No items in cart</td>
            </tr>
        <?php endif; ?>
        
        
        <tr>
            <td colspan="100%">Total: $<?php se($total, null, 0); ?></td>
        </tr>
        
        </tbody>
        
    </table>
    </div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>