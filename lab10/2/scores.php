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
        session_start();
    ?>

    <div class="container">

        <div class="row">
            <div class="col"></div>
            <div class="col-5">
                <br><br><br><br>
                <form action="index.php" method="post" style="border:2px; border-radius:15px; padding:50px; box-shadow: 1px 1px 5px #D4D4D4;">
                    <p style='font-size:30px;'><b> Finish! </b></p>
                    <p style='font-size:20px;'> You get 
                        <?php echo $_SESSION['point'];
                        session_destroy();?> out of 10!</p>
                    <br>
                    <button class="btn btn-primary"> Try again </button>
                </form>
                
            </div>
            <div class="col"></div>
        </div>

    </div>
    
</body>
</html>
