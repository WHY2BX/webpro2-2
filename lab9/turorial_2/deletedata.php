<?php

    $servername = "localhost";
    $username = "root"; //ตามที่กำหนดให้
    $password = ""; //ตามที่กำหนดให้
    $dbname = "UNIVERSITY";    //ตามที่กำหนดให้

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
        
    $c_id = $_GET['CourseID'];
    echo "$c_id";
    // SQL statement
    // 
    $sql= "DELETE FROM course WHERE course_id = '$c_id'";
    $result = mysqli_query($conn, $sql);
?>      