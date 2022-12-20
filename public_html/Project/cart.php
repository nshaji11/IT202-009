<?php
require(__DIR__ . "/../../partials/nav.php");

is_logged_in(true);

$action = strtolower(trim(se($_POST, "action","", false)));
if (!empty($action)) {
    $db = getDB();
    switch ($action) {
        case "add":
            $query = "INSERT INTO Cart (item_id, desired_quantity, unit_price, user_id)
            VALUES (:iid, :dq, (SELECT cost FROM Products where id = :iid), :uid) ON DUPLICATE KEY UPDATE
            desired_quantity = desired_quantity + :dq";
            $stmt = $db->prepare($query);
            $stmt->bindValue(":iid", se($_POST, "item_id", 0, false), PDO::PARAM_INT);
            $stmt->bindValue(":dq", se($_POST, "desired_quantity", 0, false), PDO::PARAM_INT);
            $stmt->bindValue(":uid", get_user_id(), PDO::PARAM_INT);
            try {
                $stmt->execute();
                flash("Added item to cart", "success");
            } catch (PDOException $e) {
                error_log(var_export($e, true));
                flash("Error adding item to cart", "danger");
            }
            break;
        case "update":
            $query = "UPDATE Cart set desired_quantity = :dq WHERE id = :cid AND user_id = :uid";
            $stmt = $db->prepare($query);
            $stmt->bindValue(":dq", se($_POST, "desired_quantity", 0, false), PDO::PARAM_INT);
            //cart id specifies a specific cart item
            $stmt->bindValue(":cid", se($_POST, "cart_id", 0, false), PDO::PARAM_INT);
            //user id ensures we can only edit our cart
            $stmt->bindValue(":uid", get_user_id(), PDO::PARAM_INT);
            try {
                $stmt->execute();
                flash("Updated item quantity", "success");
            } catch (PDOException $e) {
                $desired_quantity =se($_POST, "desired_quantity", "", false);
                if($desired_quantity <=0)
                {
                $cart_id=se($_POST, "cart_id", "", false);
                $stmt =$db->prepare("DELETE FROM Cart WHERE id =:item_id");
                $stmt->execute([":item_id" => $cart_id]);
                //TODO handle item removal when desired_quantity is <= 0
                //TODO handle any other update related rules per your proposal
                error_log(var_export($e, true));
                flash("Item removed", "success");
            }
        }
            break;
        case "delete":
            
            
            $cart_id=se($_POST, "cart_id", "", false);
            $stmt =$db->prepare("DELETE FROM Cart WHERE id =:item_id");

            try{
                $stmt->execute([":item_id" => $cart_id]);
                flash("Item deleted", "success");
            
            }catch(PDOException $e){
                error_log(var_export($e, true));
                flash("Error deleting item", "danger");
            }
            //TODO you do this part
            break;
        case "clear":
            $user_id = get_user_id();
            $stmt=$db->prepare("DELETE FROM Cart WHERE user_id = :uid");
            try{
                $stmt->execute([":uid"=>$user_id]);
                flash("Cart has been cleared", "success");
            } catch (PDOException $e) {
                error_log(var_export($e, true));
                flash("Error clearing cart", "danger");
            }
    }
}
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

<div class="container-fluid">
    <h1>Cart</h1>
    <table class="table table-striped">
        <?php $total = 0; ?>
        <thead>
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($cart as $c) : ?>
            <tr>
                <td><?php se($c, "name"); ?></td>
                <td><?php se($c, "unit_price"); ?></td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="cart_id" value="<?php se($c, "id"); ?>" />
                        <input type="hidden" name="action" value="update" />
                        <input type="number" name="desired_quantity" value="<?php se($c, "desired_quantity"); ?>" min="0" max="<?php se($c, "stock"); ?>" />
                        <input type="submit" class="btn btn-primary" value="Update Quantity" />
                    </form>
                </td>
                <?php $total += (int)se($c, "subtotal", 0, false); ?>
                <td><?php se($c, "subtotal"); ?></td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="cart_id" value="<?php se($c, "id"); ?>" />
                        <input type="hidden" name="action" value="delete" />
                        <input type="submit" class="btn btn-danger" value="x" />
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        <?php if (count($cart) == 0) : ?>
            <tr>
                <td colspan="100%">No items in cart</td>
            </tr>
        <?php endif; ?>
        <form method = "POST">
        <input type="hidden" name="cart_id" value="<?php se($c, "id"); ?>" />
        <input type="hidden" name="action" value="clear" />
        <input class = "btn btn-primary" type="submit" value="Clear Cart" />
        </form>
        
        <tr>
            <td colspan="100%">Total: $<?php se($total, null, 0); ?></td>
        </tr>
        
        </tbody>
        
    </table>
    <form method = "POST">
        <input type="hidden" name="cart_id" value="<?php se($c, "id"); ?>" />
        <input type="hidden" name="action" value="checkout" />
        <input class = "btn btn-success" type="submit" value="Checkout"  />
        
        </form>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>