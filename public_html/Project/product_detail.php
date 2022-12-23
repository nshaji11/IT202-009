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

$TABLE_NAME = "Ratings";

if (isset($_POST["submit"])) {
    $id = save_data($TABLE_NAME, $_POST);
    if ($id > 0) {
        flash("Rating $id saved", "success");
    }
}
//get the table definition
$columns = get_columns($TABLE_NAME);
//echo "<pre>" . var_export($columns, true) . "</pre>";
$ignore = ["id", "product_id", "user_id", "modified", "created"];

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
            <!-- no foreach-->
        
            <tr>
                <td><?php se($item, "name"); ?></td>
                <td><?php se($item, "cost"); ?></td>
                <td><?php se($item, "stock"); ?></td>
                <td><?php se($item, "category"); ?></td>
                <td><?php se($item, "description"); ?></td>
            </tr>
            

</div>
<div class="container-fluid">
    
    <div class="col-25">
    <div class="container">
    
      
      <table class="table table-striped">
        
    <form method="POST">
    
    <h2>Submit a Review</h2>
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
        <form method = "POST" action="product_detail.php">
        <input class="btn btn-primary" type="submit" value="Submit Review"/>
        
        </form>
</div>
            <?php
require(__DIR__ . "/../../partials/flash.php");
?>