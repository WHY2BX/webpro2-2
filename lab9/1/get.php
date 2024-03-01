<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab7/1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

    <?php

        $servername = "localhost";
        $username = "S241Y"; //ตามที่กำหนดให้
        $password = "EA76053"; //ตามที่กำหนดให้
        $dbname = "s241y";    //ตามที่กำหนดให้

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

            <div class="col">
                <br><br>
                <div>
                    <p>
                        <?php
                            
                            $sql= "SELECT * FROM section";
                            $result = mysqli_query($conn, $sql);

                            $num = $_GET['num'];
                            $count = 1;

                            if (mysqli_num_rows($result)>0){
                                while($row = mysqli_fetch_assoc($result)) {
                                    if($count==$num){
                                        echo "<b> Course ID : </b>". $row["course_id"] . "<br>";
                                        echo "<b> Section ID : </b>".$row["sec_id"] . "<br>";
                                        echo "<b> Semester : </b>".$row["semester"] . "<br>";
                                        echo "<b> Year : </b>".$row["year"] . "<br>";
                                        echo "<b> Building : </b>".$row["building"] . "<br>";
                                        echo "<b> Room number : </b>".$row["room_number"] . "<br>";
                                        echo "<b> Timeslot ID : </b>".$row["time_slot_id"] . "<br>";
                                    }
                                    $count++;
                                }
                            }

                        ?>
                    </p>
                </div>

                <br><br>

                <form id="CourseForm" action="get.php" method="get">
                    <p><label for='num'>Select Section:</label>
                        <input type="text" id="num" name="num" size="7" />
                    </p>
                    <button class="btn btn-dark"> Submit </button>
                </form>

                
                    
            </div>

            <div class="col">
            </div>
        </div>
    </div>
    
</body>
</html>
