<?php

// Get a connection again
require_once '../config/connect.php';

// $_POST contains an array from a form (keys and values of new data)
// print_r($_POST);

// Variables that contain information of a new data 
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

// Create a query to INSERT new values INTO the `products`
// 1: connection to DB
// 2: our query to INSERT
mysqli_query(
    $connect, 
    "INSERT INTO `products` (`id`, `title`, `price`, `description`) VALUES (NULL, '$title', '$price', '$description')"
);

// Return to index.php after creating new instance of data in DB
header('Location: ../index.php');