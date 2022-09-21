<?php
    // include connect.php with error handling
    require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }
    
    td {
        background: #b5b5b5;
    }
</style>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
        </tr>

        <?php 
            // All products from DB
            // 1: connection to DB from another file
            // 2: our SQL query
            $products = mysqli_query($connect, "SELECT * FROM `products`");
            
            // Fetching rows as an associative array
            $products = mysqli_fetch_all($products);

            // iterate through products in for loop
            foreach ($products as $product) {
                ?>
                <tr>
                    <td><?= $product[0] ?></td>
                    <td><?= $product[1] ?></td>
                    <td><?= $product[3] ?></td>
                    <td><?= $product[2] ?></td>

                    <!-- 
                        Column to update info about product inside update.php.
                        Open the file with additional parametrs (?id=...&title=...)            
                    -->
                    <td><a href="update.php?id=<?= $product[0] ?>">Update</a></td>

                    <!-- 
                        Column to delete info about product inside update.php.
                        Open the file with additional parametrs (?id=...&title=...)            
                    -->
                    <td><a style="color: red" href="vendor/delete.php?id=<?= $product[0] ?>">Delete</a></td>
                </tr>
                <?php
            }
        ?>
    </table>

    <!-- 
        Form that contains fields of a new product to post to DB 
        Action to the file that is responisble for adding to DB
        All names of inputs are keys of our associative array  
    -->
    <h3>Add new product</h3>
    <form action="vendor/create.php" method="post">
        <p>Title</p>
        <input type="text" name="title">
        <p>Description</p>
        <textarea name="description"></textarea>
        <p>Price</p>
        <input type="number" name="price"> <br><br>

        <button type="submit">Add new product</button>
    </form>
</body>
</html>