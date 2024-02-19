<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab7/4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <style>
        img{
            width: 294px;
            height: 300px;
            object-fit: cover;
            border-radius: 15px;
        }
    </style>

<?php

    echo "<div class='container'>";
    echo'<div class="row">';


    echo'<div class="col-12">';
        for($i=0; $i<4; $i++){

            echo'<div class="row">';

                echo'<div class="col-3">';
                    echo'<img src="https://images-ng.pixai.art/images/orig/e49a35fa-bf46-4282-a20e-c62e749058c9">';
                echo'</div>';
                echo'<div class="col-3">';
                    echo'<img src="https://dotesports.com/wp-content/uploads/2023/05/Dot-Esports-Image-2023-05-01T015930.309.jpg?w=1200">';
                echo'</div>';
                echo'<div class="col-3">';
                    echo'<img src="https://pbs.twimg.com/media/Fv2cIezWAAECYKP.jpg">';
                echo'</div>';
                echo'<div class="col-3">';
                    echo'<img src="https://static.zerochan.net/Kafka.%28Honkai.Star.Rail%29.full.3680481.jpg">';
                echo'</div>';

            echo'</div>';
            echo'<br>';

        }
        
        echo'</div>';


    echo'</div>';


    echo'</div>';
    echo'</div>';

?>
    
</body>
</html>
