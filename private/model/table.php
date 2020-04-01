<?php 
    ob_start();
        // creating user table 
    $user_q = "CREATE TABLE IF NOT EXISTS users ( 
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        password VARCHAR(20),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if (!mysqli_query($db, $user_q)) {
        echo "Table users created Unsuccessfully";
    } 
    // createing product table
    $product_q = "CREATE TABLE IF NOT EXISTS products (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(100) NOT NULL,
        post_by VARCHAR(50) NOT NULL,
        product VARCHAR(50) NOT NULL,
        brand VARCHAR(50) NOT NULL,
        modal VARCHAR(50) NOT NULL,
        location VARCHAR(80) NOT NULL,
        price VARCHAR(60) NOT NULL,
        color VARCHAR(30) NOT NULL,
        image VARCHAR(100) NOT NULL,
        description VARCHAR(100) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if (!mysqli_query($db, $product_q)) {
        echo "Table product created Unsuccessfully";
    } 

    $allAds_q = "CREATE TABLE IF NOT EXISTS allAds (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        product VARCHAR(50) NOT NULL,
        proId VARCHAR(50) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if (!mysqli_query($db, $allAds_q)) {
         echo "Table MyAds created Unsuccessfully";
    }
?>