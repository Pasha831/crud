<?php
    // Get the connection to DB
    require_once 'config/connect.php';

    // All parametrs are inside of $_GET variable
    // We need product id to find the product inside DB
    $product_id = $_GET['id'];

    // Get the row with specific id with mysqli_query(),
    // where `id` = `$product_id`
    $product = mysqli_query(
        $connect, 
        "SELECT * FROM `products` WHERE `id` = '$product_id'"
    );

    // mysql_fetch_assoc() — fetch a result row as an associative array
    $product = mysqli_fetch_assoc($product);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update product</title>
</head>
<body>
    <h3>Update Product</h3>
    <form action="vendor/update.php" method="post">
        <!-- 
            Hidden id of a product to post to vendor/update.php
        -->
        <input type="hidden" name="id" value="<?= $product['id'] ?>">

        <p>Title</p>
        <input type="text" name="title" value="<?= $product['title'] ?>">
        <p>Description</p>
        <textarea name="description" ><?= $product['description'] ?></textarea>
        <p>Price</p>
        <input type="number" name="price" value="<?= $product['price'] ?>"> <br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>