<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab7/3</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col"></div>

            <div class="col">

                <br><br><br>

                <h1> Member Registration</h1>

                <br>

                <form action="form.php" method="post" >

                    <label> Name: </label>
                    <input type="text" class="form-control" name="name">
                    <br>

                    <label> Address: </label>
                    <textarea class="form-control" name="add"> </textarea>
                    <br>

                    <label> Age: </label>
                    <input type="number" class="form-control" name="age">
                    <br>

                    <label> Profession: </label>
                    <input type="text" class="form-control" name="pf">
                    <br>

                    <label> Residential Status: </label>
                    <br>
                    <br>

                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Resident" checked>
                    <label class="form-check-label" for="flexRadioDefault1" >
                        Resident
                    </label>
                    <br>
                    
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Non-Resident">
                    <label class="form-check-label" for="flexRadioDefault2" >
                        Non-Resident
                    </label>

                    <br><br>

                    <button class="btn btn-dark"> Submit </button>

                </form>

                <br>
                <hr>
                <br>

                <div>
                    
                </div>

            </div>

            <div class="col"></div>
        </div> 
    </div> 
    
</body>
</html>
