<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab7/3 Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</head>
<body>
    <style>
        p{
            color:red;
        }

    </style> 

    <div class="container">
            <div class="row">
                <div class="col"></div>

                <div class="col">
                    <br><br>
                    <h1>Member Details</h1>
                    <br>
                    <div style="font-size:20px">
                    <?php
                        $namere = $_POST['name'];
                        $addre = $_POST['add'];
                        $agere = $_POST['age'];
                        $pfre = $_POST['pf'];
                        $res = $_POST['flexRadioDefault'];
                    
                        if(strlen($namere)<5){
                            $namere = "<p>".$namere."</p>";
                        }
                        if(strlen($addre)<5){
                            $addre = "<p>".$addre."</p>";
                        }
                        if(strlen($pfre)<5){
                            $pfre = "<p>".$pfre."</p>"; 
                        }
                        if($agere<5){
                            $agere = "<p>".$agere."</p>";
                        }
                            
                        
                    
                        echo "<b>Name : </b>".$namere;
                        echo "<br>";
                        echo "<b>Address : </b>".$addre;
                        echo "<br>";
                        echo "<b>Age : </b>".$agere;
                        echo "<br>";
                        echo "<b>Professor : </b>".$pfre;
                        echo "<br>";
                        echo "<b>Resdential Status : </b>". $res;
                    ?>
                    </div>

                </div>
                <div class="col"></div>
            </div>
    </div>

    
    
</body>

</html>
