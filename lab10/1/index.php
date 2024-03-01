
<!-- หมายเหตุ -->
<!-- อัพโหลดช้า เนื่องจากแก้ database -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>

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

    
    ?>

    <div class="container">
        <div class="row">
            <div class="col"></div>

            <div class="col-8">
                <br><br><br>
                <table class="table" style="text-align:center;">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                    </tr>

                    <?php
                        $sql ="SELECT * from customers";
                        $ret = $db->query($sql);   

                        while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
                            echo "<tr>";
                            echo "<td>". $row['CustomerId'] . "</td>";
                            echo "<td>". $row['FirstName'] . "</td>"; 
                            echo "<td>". $row['Address'] . "</td>";
                            echo "<td>". $row['Phone'] . "</td>";
                            echo "<td>". $row['Email'] . "</td>";
                            echo "</tr>";

                            $num = $row['CustomerId'];
                        }
                    ?>

                </table>
                
                <form method="post">
                    <div style="text-align:center;">
                        <input class="btn btn-danger"type="submit" name='del' value="Delete">
                    </div>
                </form>

                <?php
                    if (isset($_POST['del'])) {
                        
                        $sql= "DELETE FROM Customers WHERE CustomerId=$num";
                        $ret = $db->exec($sql); 
                        $num--;
                        
                    }
                ?>
            </div>
            

            <div class="col"></div>
        </div>
    </div>
    
</body>
</html>
