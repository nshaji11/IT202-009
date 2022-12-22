
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



$TABLE_NAME = "Orders";

if (isset($_POST["submit"])) {
    $id = save_data($TABLE_NAME, $_POST);
    if ($id > 0) {
        flash("Order number $id saved", "success");
    }
}
//get the table definition
$columns = get_columns($TABLE_NAME);
//echo "<pre>" . var_export($columns, true) . "</pre>";
$ignore = ["id", "user_id", "total_price", "modified", "created"];


//nes22 12/20/2022
if (isset($_POST["address"]) && isset($_POST["payment_method"]) && isset($_POST["cost"]) && isset($_POST["money_received"])&& isset($_POST["first_name"])&& isset($_POST["last_name"])) {
  $address = se($_POST, "address", "", false);
  $card = se($_POST, "payment_method", "", false);
  $cost = se($_POST, "cost", "", false);
  $money = se($_POST, "money_received", "", false);
  $first = se($_POST, "first_name", "", false);
  $last = se($_POST, "last_name", "", false);
  //TODO 3
  $hasError = false;
  if (empty($address)) {
      flash("Address must not be empty", "danger");
      $hasError = true;
  }
}
  /*if (empty($card)) {
    flash("Payment type must not be empty", "danger");
    $hasError = true;
}
if (empty($first)) {
  flash("Please enter your first name", "danger");
  $hasError = true;
}
if (empty($last)) {
  flash("Please enter your last name", "danger");
  $hasError = true;
}
  if (
    strlen($cost) > 0 && $money !== $cost
) {
    flash("Please pay the correct amount", "danger");
    $hasError = true;
}
nes22 12/20
}
*/
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}
* {
  box-sizing: border-box;
}
.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}
.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}
.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}
.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}
.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}
.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}
input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
label {
  margin-bottom: 10px;
  display: block;
}
.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}
.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
.btn:hover {
  background-color: #45a049;
}
a {
  color: #2196F3;
}
hr {
  border: 1px solid lightgrey;
}
span.price {
  float: right;
  color: grey;
}
/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<!--<body>-->

<div class="container-fluid">
    <h1>Checkout Form</h1>
    <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> </span></h4>
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
        <td colspan="100%" >Total: $<?php se($total, null, 0); ?></td>
        </tr>
        
        </tbody>
        
    
        </table>
      
      <!--<p>Total <span class="price" style="color:black"><b>$57</b></span></p>-->
    </div>
  </div>
    <form method="POST">
    <?php $total = 0; ?>
            <?php foreach ($cart as $c) : ?>
            <tr>
                
                <?php $total += (int)se($c, "subtotal", 0, false); ?>
                
                
            </tr>
        <?php endforeach; ?>
    
        <?php foreach ($columns as $index => $column) : ?>
            <?php /* Lazily ignoring fields via hardcoded array*/ ?>
            <?php if (!in_array($column["Field"], $ignore)) : ?>
                <div class="mb-4">
                    <label class="form-label" for="<?php se($column, "Field"); ?>"><?php se($column, "Field"); ?></label>
                    <input class="form-control" id="<?php se($column, "Field"); ?>" type="<?php echo input_map(se($column, "Type", "", false)); ?>" name="<?php se($column, "Field"); ?>" />
                    
                  </div>
            <?php endif; ?>
        <?php endforeach; ?>
        </form>
        <form method = "POST" action="order_confirmation.php">
        <input class="btn btn-primary" type="submit" value="Place Order"  />
        
        </form>
        <!--
            <div class="mb-4">
            <label class="form-label" for="first_name">First Name</label>
            <input class="form-control" type="text" name="first_name" required maxlength="30" />
            </div>
            <div class="mb-4">
            <label class="form-label" for="last_name">Last Name</label>
            <input class="form-control" type="text" name="last_name" required maxlength="30" />
            </div>
            <div class="mb-4">
            <label class="form-label" for="address">Address</label>
            <input class="form-control" type="text" name="address" required maxlength="40" />
            </div>
            <div class="mb-4">
            <label class="form-label" for="cost">Cost</label>
            
            <input type="text" name="total_cost" id="cost" value=" $<?php se($total, null, 0); ?>" />
            </div>
            <div class="mb-4">
            <label class="form-label" for="payment_method">Card</label>
            <div id="cardlHelpBlock" class="form-text">
            Visa, MasterCard, American Express, Discover
            </div>
            <input class="form-control" type="text" name="payment method" required maxlength="30" />
            </div>
            
            <div class="mb-4">
            <label class="form-label" for="money_received">Payment Amount</label>
            <input class="form-control" type="text" name="money_received" required maxlength="5" />
            </div>
            -->
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>