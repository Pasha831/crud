<?php
    /* CRUD:

    C - create
    R - read
    U - update
    D - delete

    */

    // Connection to MySQL database
    // localhost == 127.0.0.1, if server is my own on my PC
    // root - our login to phpMyAdmin
    // password was empty
    // crud - name of a database to work with
    $connect = mysqli_connect('localhost', 'root', '', 'crud');

    // check the connection to database
    if (!$connect) {
        // die = echo + exit
        die("Can't connect to the database!");
    }
?>