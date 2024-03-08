<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab12/1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <?php
        // web service URL 
        $url = "http://10.0.15.21/lab/lab12/restapis/10countries.json";   
        $response = file_get_contents($url);
        $result = json_decode($response);
    ?>
</body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <br><br><br>
                <?php
                    foreach ($result as $country){
                        echo "<div class='row'>";
                        echo "<div class='col'>";
                        echo "<p> Name : ".$country->name."</p>";
                        echo "<p> Capital : ".$country->capital."</p>";
                        echo "<p> Population : ".$country->population."</p>";
                        echo "<p> Region : ".$country->region."</p>";
                        echo "<p> Location : "; foreach ($country->latlng as $loc){echo $loc." ";} echo"</p>";
                        echo "<p> Borders : "; foreach ($country->borders as $bd){echo $bd." ";} echo"</p>";
                        echo "</div>";
                        echo "<div class='col' style='padding: 70px 0; text-align: center;'>";
                        echo "<img width='100px' src='".$country->flag."'>";
                        echo "</div>";
                        echo "</div>";
                        echo "<hr>";

                    }
                    
                ?>
                
            </div>
            <div class="col-4"></div>
        </div>
    </div>

</html>