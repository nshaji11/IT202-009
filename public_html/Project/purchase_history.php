<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");

is_logged_in(true);
$db =getDB();
$results = [];

$col = se($_GET, "col", "created", false);
if(!in_array($col, ["total_price", "created", "payment"])) {
    $col = "created";
}

$order = se($_GET, "order", "asc", false);
if(!in_array($order, ["asc", "desc"])) {
    $order = "asc";
}
$name =se($_GET, "name", "", false);
$name2 = se($_GET, "name2", "", false);

$base_query = "SELECT id, address, total_price, payment, created FROM Orders";
$total_query = "SELECT count(1) as total FROM Orders";

$query = "WHERE 1=1";
$params = [];

if(!empty($name)) {
    $query .= "AND created >= :d1 AND created <=:d2";
    $params[":d1"] = "$name";
    $params[":d2"] = "$name2 23:59:59";

}

if(!empty($col) && !empty($order)) {
$query .= "ORDER BY $col $order";}

$per_page = 10;
paginate($total_query . $query, $params, $per_page);

$query .= " LIMIT :offset, :count";
$params[":offset"] = $offset;
$params[":count"] = $per_page;

$stmt = $db->prepare($base_query . $query);
foreach ($params as $key => $value) {
    $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
    $stmt->bindValue($key, $value, $type);
}
$params = null;

try {
    $stmt->execute($params);
    $r =$stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre");
}
?>

<form class = "row row-cols-auto g-3 align-items-center">
    <div class="col">
        <div class="input-group">
           <div class ="input-group-text">Date Start</div>
           <input class="form-control" name="name" value="<?php se($name); ?>"/>
        </div>
    </div>
    <div class="col">
        <div class="input-group">
           <div class ="input-group-text">Date End</div>
           <input class="form-control" name="name2" value="<?php se($name2); ?>"/>
        </div>
    </div>
    <div class="col">
        <div class="input-group">
            <div class="input-group-text">Sort</div>
            <select class="form-control" name="col" value="<?php se($col); ?>">
            <option value="total_price">Total</option>
            <option value="created">Date Purchased</option>
            <option value="total_price">Payment Type</option>
        </select>
        <script>
            document.forms[0].col.value = "<?php se($col); ?>";
            </script>
            <select class="form-control" name="order" value="<?php se($order); ?>">
            <option value="asc">Up</option>
            <option value="desc">Down</option>
            </select>
        <script>
            document.forms[0].order.value = "<?php se($order); ?>";
        </script> 

        </div>
    </div>
        <div class="col">
            <div class="input-group">
            <input type="submit" class="btn btn-primary" value="Apply"/>
            </div>
        </div>
    
</form>


<?php $totalValue = 0;?>
<div class ="container-fluid">
    <h1>Order History</h1>
    <table class="table text-dark">
        <thead>
            <th>Total Price</th>
            <th>Payment Visa</th>
            <th>Order Date</th>
            <th>Address</th>
            <th>More Details</th>

        </thead>
        <?php foreach ($results as $item) : ?>
            <tbody>
                <td><?php se($item, "total_price"); ?></td>
                <td><?php se($item, "payment"); ?></td>
                <td><?php se($item, "created"); ?></td>
                <td><?php se($item, "address"); ?></td>
                <?php $totalValue = $totalValue + intval(se($item, "total_price", "", false));?>
                <td>
                    <form method ="POST" action="order_info.php">
                        <input class="btn btn-primary" type="submit" value="More Info" name="OrderInfo"/>
                        <input type= "hidden" name="order_id" value="<?php se($item, "id"); ?>"/>
                    </form>
                </td>
            </tbody>
            <?php endforeach; ?>
            <h2> Total Revenue for All Orders: $<?php echo($totalValue);?></h2>
            
    </table>
    

</div>    
        
<?php require(__DIR__ . "/../../partials/flash.php");?>