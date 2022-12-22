<?php
require(__DIR__ . "/../../partials/nav.php");

is_logged_in(true);
$db = getDB();

$order_id =(int)se($_GET, "id", -1, false);

if($order_id < 1)
{
    flash("Order ID is incorrect", "danger");
}

$query = "SELECT Products.name as productName, Products.description as productDesc, Products.unit_price as prodPrice,
OrderItems.quantity as orderQuantity, Orders.address as orderAddress, Orders.payment as orderPayment, Orders.total_price as orderTotal FROM Products INNER JOIN OrderItems ON Products.id = OrderItems.item_id INNER JOIN Orders.id = OrderItems.order_id WHERE order_id = oid";
//SELECT cart.id, item.stock, item.name, cart.unit_price, (cart.unit_price * cart.desired_quantity) as subtotal, cart.desired_quantity
//FROM Products as item JOIN Cart as cart on item.id = cart.item_id
//WHERE cart.user_id = :uid


$stmt = $db->prepare($query);
$cart = [];
try {
    $stmt->execute([":oid" => $order_id]);
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
                <th>Product Description</th>
                <th>Quantity</th>
                
                
            </tr>
        </thead>
        <tbody>
        <?php foreach ($cart as $c) : ?>
            <tr>
                <td><?php se($c, "productName"); ?></td>
                <td><?php se($c, "prodPrice"); ?></td>
                <td><?php se($c, "productDesc");?></td>
                <td>
                <?php se($c, "orderQuantity"); ?>
                
            </tr>
        <?php endforeach; ?>
        
        
        
        
        
        </tbody>
        
    </table>
    
        
</div>
<div class="container-fluid">
<h1> Order information </h1>
    <table class="table text-light">
        <?php $total = 0; ?>
        <thead>
            <tr>
                <th>Payment Method</th>
                <th>Address</th>
                <th>Total Cost</th>
                
                
                
            </tr>
        </thead>
        <tbody>
        <?php foreach ($cart as $c) : ?>
            <tr>
                <td><?php se($c, "orderPayment"); ?></td>
                <td><?php se($c, "orderAddress"); ?></td>
                <td><?php se($c, "orderTotal");?></td>
                
                
        <?php endforeach; ?>
        
        
        
        </tr>
        </div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>
