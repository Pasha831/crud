<?php
    // Get the connection to DB
    require_once '../config/connect.php';

    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // Update database
    mysqli_query(
        $connect, 
        "UPDATE `products` SET `title` = '$title', `price` = '$price', `description` = '$description' WHERE `products`.`id` = '$id'"
    );

    // Return to index.php after creating new instance of data in DB
    header('Location: ../index.php');