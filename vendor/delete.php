<?php
    // Get the connection to DB
    require_once '../config/connect.php';

    $id = $_GET['id'];

    // Create a query to delete row of data from DB
    mysqli_query(
        $connect,
        "DELETE FROM products WHERE `products`.`id` = '$id'"
    );

    // Return to index.php after creating new instance of data in DB
    header('Location: ../index.php');