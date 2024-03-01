<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab11/1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>

    <style> 
        .kanit-light {
            font-family: "Kanit", sans-serif;
            font-weight: 300;
            font-style: normal;
        }

        .kanit-regular {
            font-family: "Kanit", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

    </style>

    <?php
        // 1. Connect to Database 
        class MyDB extends SQLite3 {
            function __construct() {
                $this->open('customers.db');
            }
        }

        // 2. Open Database 
        $db = new MyDB();
        if(!$db) {
            echo $db->lastErrorMsg();
        }

        $sql ="SELECT * from customers where CustomerID=1";
        $ret = $db->query($sql);
        while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
            $id = $row['CustomerId'];
        }
  
    ?>

    <br><br>

    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form action="index.php" method="post">
                    <h3 style="text-align:center;"> Employee Information </h3>
                    <br>
                    <?php
                        
                            echo "<label class='form-label'>Employee id:</label>";
                            echo "<input type='text' class='form-control' id='id' value=".$id.">";
                            echo "<br>
                            <label class='form-label'>Firstname:</label>
                            <input type='text' class='form-control' id='fname' value='".$>
                            <br>
                            <label class='form-label'>Lastname:</label>
                            <input type='text' class='form-control' id='lname'>
                            <br>
                            <label class='form-label'>Address:</label>
                            <input type='text' class='form-control' id='add'>
                            <br>
                            <label class='form-label'>Email:</label>
                            <input type='email' class='form-control' id='mail'>
                            <br>
                            <label class='form-label'>Phone:</label>
                            <input type='text' class='form-control' id='phone'>
                        
                    ?>
        
                    <input class="btn btn-primary" type="button" name="save" value="Save">
                    <input class="btn btn-primary" type="button" name="show" value="Show">
                    <input class="btn btn-primary" type="button" name="clear" value="Clear">
                </form>

                <?php



                    if (isset($_POST['save'])) {
                            
                        $sql= "UPDATE course
                        SET title = '$tt', dept_name = '$dname', credits = $cd
                        WHERE course_id = '$id';";
                        $result = mysqli_query($conn, $sql);
                        
                        
                    }
                    elseif (isset($_POST['show'])) {
                        $sql= "DELETE FROM course WHERE course_id='$id';";
                        $result = mysqli_query($conn, $sql);
                    }
                ?>

            </div>
            <div class="col"></div>
        </div>
    </div>

</body>
</html>