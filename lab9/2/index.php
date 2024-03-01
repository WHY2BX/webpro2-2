<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab9/2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <!-- รับ cID ที่ส่งมาจากการ click หน้าที่แล้ว ถ้าไม่มีก็ให้เป็น 0 -->
    <?php

    if(isset( $_GET['cID'])){
        $cID = $_GET['cID'];
    }else{
        $cID = '0';
    }

    ?>
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

                <br><br><br>

                <h1> Course Details</h1>
                <br>

                <?php

                // query ตาม cID ที่ส่งมาจากหน้าที่แล้ว ถ้าไม่มีก็ query อะไรออกมาไม่ได้เลย
                    $courseid = "";
                    $coursetitle = "";
                    $deptname = "";
                    $credit = "";

                    $sql="SELECT * FROM course WHERE course_id='".$cID."'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)) {
                            $courseid = $row['course_id'];
                            $coursetitle = $row['title'];
                            $deptname = $row['dept_name'];
                            $credit = $row['credits'];
                        }
                    }
                ?>

                <!-- form ก็คือเปิดหน้าใหม่ ไม่ใส่ action = redirect กลับมาหน้าตัวเอง -->
                <form method="post">
                    <label> Course ID : </label>
                    <input id="courseid" name="courseid" type="text" class="form-control" value="<?php echo $courseid;?>">
                    
                    <label> Title : </label>
                    <input id="coursetitle" name="coursetitle" type="text" class="form-control" value="<?php echo $coursetitle;?>">
                    
                    <label> Department name : </label>
                    <input id="deptname" name="deptname" type="text" class="form-control" value="<?php echo $deptname;?>">
                    
                    <label> Credits : </label>
                    <input id="credit" name="credit" type="number" class="form-control" value="<?php echo $credit;?>">

                    <br>

                    <input type="submit" name="update" value="Update" class="btn btn-primary">
                    <input type="submit" name="delete" value="Delete" class="btn btn-primary">
                </form>
            
                <?php

                if (isset($_POST['courseid'])) {
                    
                    $id = $_POST['courseid'];
                    $tt = $_POST['coursetitle'];
                    $dname = $_POST['deptname'];
                    $cd = $_POST['credit'];


                    if (isset($_POST['update'])) {
                        
                        $sql= "UPDATE course
                        SET title = '$tt', dept_name = '$dname', credits = $cd
                        WHERE course_id = '$id';";
                        $result = mysqli_query($conn, $sql);
                        
                        
                    }
                    elseif (isset($_POST['delete'])) {
                        $sql= "DELETE FROM course WHERE course_id='$id';";
                        $result = mysqli_query($conn, $sql);
                    }

                    
                }

                ?>
                

            </div>

            <div class="col">
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col"></div>

            <div class="col-8" style="text-align:center;">

                <table class="table">
                    <tr>
                        <th style="background-color:#F5F5F5;"> course_id </th>
                        <th style="background-color:#F5F5F5;"> title </th>
                        <th style="background-color:#F5F5F5;"> dept_name </th>
                        <th style="background-color:#F5F5F5;"> credits </th>
                    </tr> 
                    
                <?php

                    $sql = "SELECT * FROM course;";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td><a onClick=\"set('".$row["course_id"]."')\" style='cursor:pointer;'>" . $row["course_id"]. "</a></td>";
                            echo "<td>" . $row["title"]. "</td>";
                            echo "<td>". $row["dept_name"] ."</td>";
                            echo "<td>". $row["credits"] ."</td>";
                            echo "</tr>";
                        }
                    }
                    else {
                        echo "0 results";
                    }
                    
                    

                    if (isset($_GET['hello'])) {
                        
                    }

                ?>
                </table>

            </div>

            <div class="col"></div>
        </div>
    </div>
    

    <script>

        // ส่ง cID ที่กดไป redirect ไปหน้าใหม่ (เหมือนเปิด index.php ไฟล์นี้อีกรอบ แต่มีตัวแปรติดไปด้วย

        function set(id){
            window.open('index.php?cID='+id,'_self');
        }

    </script>
    mysqli_close($conn);

    
</body>
</html>
