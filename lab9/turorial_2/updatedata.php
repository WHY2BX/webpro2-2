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
    $c_title = $_GET['CourseTitle'];
    $c_dept = $_GET['DeptName'];
    $c_credits = $_GET['Credits'];
    echo "$c_id / $c_title / $c_dept / $c_credits " ;
    $sql ="UPDATE course SET title = '$c_title', dept_name ='$c_dept', credits=$c_credits WHERE course_id = '$c_id';";
    $result = mysqli_query($conn, $sql);
?>