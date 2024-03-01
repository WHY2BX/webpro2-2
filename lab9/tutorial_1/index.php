<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab8</title>

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

    ?>

    <div class="container">
    
        <div class="row">
            <div class="col">
            </div>

            <div class="col-10" style="text-align: center;">
                <br><br><br>

                <table class="table">
                    <tr style="background-color:#F5F5F5 ;">
                    
                        <th> course_id </th>
                        <th> title </th>
                        <th> dept_name </th>
                        <th> year </th>
                        <th> semester </th>
                        <th> building </th>
                    </tr>
                    
                <?php
                    // --- Create connection
                    // --- SQL SELECT statement  
                    $sql = "SELECT * FROM course join section using (course_id);";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["course_id"]. "</td>";
                        echo "<td>" . $row["title"]. "</td>";
                        echo "<td>". $row["dept_name"] ."</td>";
                        echo "<td>". $row["year"] ."</td>";
                        echo "<td>". $row["semester"] ."</td>";
                        echo "<td>". $row["building"] ."</td>";
                        echo "</tr>";
                    }
                    } else {
                        echo "0 results";
                    }

                    // ---- close connection
                    mysqli_close($conn);
                ?>
                </table>

            </div>

            <div class="col">
            </div>
            
        </div>
    </div>

    
    
</body>
</html>
