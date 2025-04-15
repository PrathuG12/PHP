<?php

$conn = new mysqli("localhost", "root", "root", "");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    // Create database
    $sql = "CREATE DATABASE mydb2";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }
    
    $conn->close();
echo"<br>This code is executed by Prathu Garg 0221BCA093";
    
?>