<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="prodid">Product ID :</label>
        <input type="text" id="prodid" name="prodid" placeholder="Enter a Product ID (1-30)" required />
        <button type="submit" name="submit">Submit</button>  
    </form>
    <br>

    <?php
        if(isset($_POST['submit']))
        {
            $prodid = $_POST['prodid'];        
            $url = "http://10.0.15.21/lab/lab12/restapis/products.php?prodid=" . $prodid;

            // execute url
            $client = curl_init($url); 
            curl_setopt($client,CURLOPT_RETURNTRANSFER,true);

            // จะได้ออกมาเป็น jsonstring vvv
            $response = curl_exec($client);

            // แปลง json string เป็น json obj.
            $result = json_decode($response);
            echo "Product ID: " . $result[0]->ProductID . " <br>"; 
            echo "Product Name: " . $result[0]->ProductName . " <br>"; 
            echo "Description: " . $result[0]->Description . " <br>";
            echo "Price: " . $result[0]->UnitPrice . " <br>"; 

        }

    ?>
</body>
</html>