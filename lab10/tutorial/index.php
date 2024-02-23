<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab10</title>
</head>
<body>

    <?php
        // 1. Connect to Database 
        class MyDB extends SQLite3 {
            function __construct() {
                $this->open('lab10-file.db');
            }
        }

        // 2. Open Database 
        $db = new MyDB();
        if(!$db) {
            echo $db->lastErrorMsg();
        } else {
            echo "Opened database successfully<br>";
        }

        // 3. Query Execution
        // SQL Statements

        // <<< เอาไว้ใส่ text ยาวๆ


        // $sql =<<<EOF
        // CREATE TABLE questions (
        // QID INTEGER PRIMARY KEY AUTOINCREMENT,
        // Stem VARCHAR(150) NOT NULL,
        // Alt_A VARCHAR(50) NOT NULL,
        // Alt_B VARCHAR(50) NOT NULL,
        // Alt_C VARCHAR(50) NOT NULL,
        // Alt_D VARCHAR(50) NOT NULL,
        // Correct VARCHAR(3) NOT NULL
        // );
        // EOF;

        // $sql =<<<EOF
        // INSERT INTO questions (Stem, Alt_A, Alt_B, Alt_C, Alt_D, Correct)
        // VALUES ('Which of the following is not a valid SQL type?','FLOAT','NUMERIC','DECIMAL','CHARACTER','C'), 
        // ('Which of the following is not a DDL command?','TRUNCATE','ALTER','CREATE','UPDATE','D'),
        // ('Which of the following are TCL commands?','COMMIT and ROLLBACK','UPDATE and TRUNCATE','SELECT and INSERT','GRANT and REVOKE','A'),
        // ('Which statement is used to delete all rows in a table without having the action logged?','DELETE','REMOVE','DROP','TRUNCATE','D');
        // EOF;


        //db execute แบบ ไม่ return ค่าออกมา
        // $ret = $db->exec($sql); 
        // if(!$ret){
        //     echo $db->lastErrorMsg();
        // } else {
        //     echo "more 4 records created successfully<br>";
        // }


        // db query แบบมีอะไร return ออกมา พวก select อะไรแบบนี้
        $sql ="SELECT * from questions";
        $ret = $db->query($sql);   

        while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
            echo "<h3> ". $row['QID'] . " ";
            echo " ". $row['Stem'] . " </h3>"; 
            echo "<input type='radio' name='choice".$row['QID']."'><label>". $row['Alt_A'] . "</label><br>";
            echo "<input type='radio' name='choice".$row['QID']."'><label> ". $row['Alt_B'] . "</label><br>";
            echo "<input type='radio' name='choice".$row['QID']."'><label> ". $row['Alt_C'] . "</label><br>";
            echo "<input type='radio' name='choice".$row['QID']."'><label> ". $row['Alt_D'] . "</label><br>";
            // echo "<input type='radio'><label> ". $row['Correct'] . "</label><br>";
        }

        echo "Operation done successfully<br>";


        // 4. Close database
        $db->close();
    ?>
    
</body>
</html>