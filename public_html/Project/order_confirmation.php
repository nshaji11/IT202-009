<?php
require(__DIR__ . "/../../partials/nav.php");

is_logged_in(true);
$query = "SELECT cart.id, item.stock, item.name, cart.unit_price, (cart.unit_price * cart.desired_quantity) as subtotal, cart.desired_quantity
FROM Products as item JOIN Cart as cart on item.id = cart.item_id
 WHERE cart.user_id = :uid";
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
    flash("Error fetching cart", "danger");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h1 {
  font-family: 'Times New Roman', Times, serif;
  
  color: #3c2183;
  
}
h2 {
    font-family: 'Times New Roman', Times, serif;
  font-size: large;
  color: rgb(74, 38, 234);
}
body{
    background-color: rgb(199, 188, 222);
    

}


</style>
</head>

<div class="container-fluid">
<h1> Order successful! Payment received </h1>
<h2>Thank you for shopping :)</h2>
    <h3>Details</h3>
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
            <td colspan="100%">Paid: $<?php se($total, null, 0); ?></td>
        </tr>
        
        </tbody>
        
    </table>
    <form method = "POST" action="shop.php">
        <input type="hidden" name="total_cost" value="<?php echo($total)?>" />
        <input type="hidden" name="cart_id" value="<?php se($c, "id"); ?>" />
        <input type="hidden" name="action" value="checkout" />
        <input class = "btn btn-success" type="submit" value="Return to Shop"  />
        
        </form>
        
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>

        
        