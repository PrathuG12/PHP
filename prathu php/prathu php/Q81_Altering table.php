<?php

$conn = new mysqli("localhost", "root", "root", "mydb2");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    // sql to create table
    $sql = "ALTER TABLE students2
    ADD PRIMARY KEY (Stud_ID),
    ADD UNIQUE KEY Stud_Email (Stud_Email);";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table students altered successfully";
    } else {
        echo "Error altering table: " . $conn->error;
    }
    
    $conn->close();
        echo"<br>This code is executed by Prathu Garg 0221BCA093!"
?>