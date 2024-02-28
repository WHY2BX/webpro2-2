<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab10/2</title>

    <link href="style.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

</head>
<body>

    <?php
    class MyDB extends SQLite3 {
        function __construct() {
            $this->open('questions.db');
        }
    }

    $db = new MyDB();
    if(!$db) {
        echo $db->lastErrorMsg();
    }

    session_start();
    if(!isset($_SESSION['qid'])){
        $_SESSION['qid']=1;
        $_SESSION['point']=0;
    }

    if($_SESSION['qid']>10){

    }
    
    
    ?>

    <div class="container">

        <div class="row">
            <div class="col"></div>
            <div class="col-5">
                <br><br><br><br>
                <form action="action.php" method="post" style="border:2px; border-radius:15px; padding:50px; box-shadow: 1px 1px 5px #D4D4D4;">
                    <?php
                        $sql = <<<EOF
                        SELECT * from questions where QID= $_SESSION[qid];
                        EOF;

                        $ret = $db->query ($sql);   
                    
                        while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
                            echo "<p style='font-size:30px;'>". $row['QID'] . ".) ";
                            echo "". $row['Stem'] . "</p>"; 
                            echo "<input class='form-check-input' type='radio' name='choice' value='A'> 
                            <label class='form-check-label' style='font-size:20px;'> &nbsp; A.) &nbsp;". $row['Alt_A'] . "</label> <br>";
                            echo "<input class='form-check-input' type='radio' name='choice' value='B'> 
                            <label class='form-check-label' style='font-size:20px;'> &nbsp; B.) &nbsp;". $row['Alt_B'] . "</label> <br>";
                            echo "<input class='form-check-input' type='radio' name='choice' value='C'> 
                            <label class='form-check-label' style='font-size:20px;'> &nbsp; C.) &nbsp;". $row['Alt_C'] . "</label> <br>";
                            echo "<input class='form-check-input' type='radio' name='choice' value='D'> 
                            <label class='form-check-label' style='font-size:20px;'> &nbsp; D.) &nbsp;". $row['Alt_D'] . "</label> <br>";
                            
                            $_SESSION["ans"] = $row['Correct'];
                        }
                        
                        
                    ?>
                    <br>
                    <button class="btn btn-primary" > submit </button>
                </form>
            </div>
            <div class="col"></div>
        </div>

    </div>
    
</body>
</html>
