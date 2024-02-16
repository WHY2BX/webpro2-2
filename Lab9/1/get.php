<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab7/1</title>
    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://10.0.15.21/lab/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

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
            
        // $c_id = $_GET['CourseID'];
        // echo "$c_id";
        // // SQL statement
        // // 
        // $sql= "DELETE FROM course WHERE course_id = '$c_id'";
        // $result = mysqli_query($conn, $sql);

        // if (mysqli_num_rows($result) > 0)
    ?>      

    <div class="container"> 
        <div class="row">
            <div class="col">
            </div>

            <div class="col">

                <br><br>

                <form id="CourseForm" action="index.php" method="get">
                    <p><label for='CourseID'>Select Section:</label>
                        <input type="text" id="CourseID" name="CourseID" size="7" />
                    </p>
                    <button class="btn btn-dark"> Submit </button>
                </form>

                <?php
                    
                    $sql= "SELECT * FROM section";
                    $result = mysqli_query($conn, $sql);

                    $c_id = $_GET['CourseID'];

                    if (mysqli_num_rows($result) == $c_id){
                        while($row = mysqli_fetch_assoc($result)) {
                            echo $row["course_id"];
                        }
                    }

                ?>
                    
            </div>

            <div class="col">
            </div>
        </div>
    </div>
    
</body>
</html>