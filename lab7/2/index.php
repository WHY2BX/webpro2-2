<!DOctoberYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab7/2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-4">
            </div>

            <div class="col-4" style="text-align:center;">

                <br><br>

                <h1> 2024 Calendar </h1>

                <br><br>

                <form method="post">
                    <label> Select Month : </label>
                    <select class="form-select" name="xxx"> 
                        <option value="" disabled selected>Select Month</option>
                        <option value="January"> Januaryuary </option>
                        <option value="Febuary"> Febuary </option>
                        <option value="March"> March </option>
                        <option value="April"> April </option>
                        <option value="May"> May </option>
                        <option value="June"> June </option>
                        <option value="July"> July </option>
                        <option value="August"> August </option>
                        <option value="September"> September </option>
                        <option value="October"> October </option>
                        <option value="November"> November </option>
                        <option value="December"> December</option>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-dark"> Submit </button>
                </form>

                <br><br>

                <?php
                if(!empty($_POST['xxx'])){
                    echo "<h3>".$_POST['xxx']."</h3>";
                }
                    
                ?>

                <br>
                
                
                <table class="table">
                    <tr>
                        <th>Mon</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thur</th>
                        <th>Fri</th>
                        <th>Sat</th>
                        <th>Sun</th>
                    </tr>

                    <?php

                    if(!empty($_POST['xxx'])) {
                        $selected = $_POST['xxx'];
                        if($selected=="January"){
                            echo "

                            <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            </tr>
                            
                            ";
                            for ($i=8; $i<=31; $i++){

                                if($i==8 || $i==15 || $i==22){
                                    echo "<tr>";
                                }

                                    echo "<td>";

                                    echo $i;

                                    echo "</td>";

                                if($i==14 || $i==21 || $i==28){
                                    echo "</tr>";
                                }
                            }
                            echo "
                            <td style='color:grey;'>1</td>
                            <td style='color:grey;'>2</td>
                            <td style='color:grey;'>3</td>
                            <td style='color:grey;'>4</td>";


                        }
                        else if($selected=="Febuary"){
                            echo "

                            <tr>
                            <td style='color:grey;'>29</td>
                            <td style='color:grey;'>30</td>
                            <td style='color:grey;'>31</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            </tr>
                            
                            ";
                            for ($i=5; $i<=29; $i++){

                                if($i==5 || $i==12 || $i==19 || $i==26){
                                    echo "<tr>";
                                }

                                    echo "<td>";

                                    echo $i;

                                    echo "</td>";

                                if($i==11 || $i==18 || $i==25){
                                    echo "</tr>";
                                }

                            }
                            echo "
                            <td style='color:grey;'>1</td>
                            <td style='color:grey;'>2</td>
                            <td style='color:grey;'>3</td>";
                        
                        }
                        else if($selected=="March"){
                            echo "

                            <tr>
                            <td style='color:grey;'>26</td>
                            <td style='color:grey;'>27</td>
                            <td style='color:grey;'>28</td>
                            <td style='color:grey;'>29</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            </tr>
                            
                            ";
                            for ($i=4; $i<=31; $i++){

                                if($i==4 || $i==11 || $i==18 || $i==25){
                                    echo "<tr>";
                                }

                                    echo "<td>";

                                    echo $i;

                                    echo "</td>";

                                if($i==10 || $i==17 || $i==24 || $i==31){
                                    echo "</tr>";
                                }

                            }
                        }
                        else if($selected=="April"){
                            
                            for ($i=1; $i<=30; $i++){

                                if($i==8 || $i==15 || $i==22 || $i==29){
                                    echo "<tr>";
                                }

                                    echo "<td>";

                                    echo $i;

                                    echo "</td>";

                                if($i==14 || $i==21 || $i==28){
                                    echo "</tr>";
                                }

                            }

                            echo "
                            <td style='color:grey;'>1</td>
                            <td style='color:grey;'>2</td>
                            <td style='color:grey;'>3</td>
                            <td style='color:grey;'>4</td>
                            <td style='color:grey;'>5</td>                         
                            ";
                        }
                        else if($selected=="May"){
                            echo "

                            <tr>
                            <td style='color:grey;'>29</td>
                            <td style='color:grey;'>30</td>
                            
                            
                            ";
                            
                            for ($i=1; $i<=31; $i++){

                                if($i==6 || $i==13 || $i==20 || $i==27){
                                    echo "<tr>";
                                }

                                    echo "<td>";

                                    echo $i;

                                    echo "</td>";

                                if($i==5 || $i==12 || $i==19 || $i==26){
                                    echo "</tr>";
                                }

                            }

                            echo "
                            <td style='color:grey;'>1</td>
                            <td style='color:grey;'>2</td>                      
                            ";
                        }
                        else if($selected=="June"){
                            echo "

                            <tr>
                            <td style='color:grey;'>27</td>
                            <td style='color:grey;'>28</td>
                            <td style='color:grey;'>29</td>
                            <td style='color:grey;'>30</td>
                            <td style='color:grey;'>31</td>
                                                    
                            ";
                            
                            for ($i=1; $i<=30; $i++){

                                if($i==3 || $i==10 || $i==17 || $i==24){
                                    echo "<tr>";
                                }

                                    echo "<td>";

                                    echo $i;

                                    echo "</td>";

                                if($i==2 || $i==9 || $i==16 || $i==23|| $i==30){
                                    echo "</tr>";
                                }

                            }

                        }
                        else if($selected=="July"){
                            
                            
                            for ($i=1; $i<=31; $i++){

                                if($i==8 || $i==15 || $i==22 || $i==29){
                                    echo "<tr>";
                                }

                                    echo "<td>";

                                    echo $i;

                                    echo "</td>";

                                if($i==7 || $i==14 || $i==21 || $i==28){
                                    echo "</tr>";
                                }

                            }
                            echo "

                            <td style='color:grey;'>1</td>
                            <td style='color:grey;'>2</td>
                            <td style='color:grey;'>3</td>
                            <td style='color:grey;'>4</td>

                                                    
                            ";

                        }
                        else if($selected=="August"){
                            echo "

                            <td style='color:grey;'>29</td>
                            <td style='color:grey;'>30</td>
                            <td style='color:grey;'>31</td>";
                            
                            for ($i=1; $i<=31; $i++){

                                if($i==5 || $i==12 || $i==19 || $i==26){
                                    echo "<tr>";
                                }

                                    echo "<td>";

                                    echo $i;

                                    echo "</td>";

                                if($i==4 || $i==11 || $i==18 || $i==25){
                                    echo "</tr>";
                                }

                            }
                            echo "
                            <td style='color:grey;'>1</td>                       
                            ";

                        }
                        else if($selected=="September"){
                            echo "

                            <td style='color:grey;'>26</td>
                            <td style='color:grey;'>27</td>
                            <td style='color:grey;'>28</td>
                            <td style='color:grey;'>29</td>
                            <td style='color:grey;'>30</td>
                            <td style='color:grey;'>31</td>";
                            
                            for ($i=1; $i<=30; $i++){

                                if($i==2 || $i==9 || $i==16 || $i==23|| $i==30){
                                    echo "<tr>";
                                }

                                    echo "<td>";

                                    echo $i;

                                    echo "</td>";

                                if($i==1 || $i==8 || $i==15 || $i==22|| $i==29){
                                    echo "</tr>";
                                }

                            }
                            echo "
                            <td style='color:grey;'>1</td>
                            <td style='color:grey;'>2</td> 
                            <td style='color:grey;'>3</td> 
                            <td style='color:grey;'>4</td> 
                            <td style='color:grey;'>5</td> 
                            <td style='color:grey;'>6</td>                        
                            ";

                        }
                        else if($selected=="October"){
                            echo "

                            <td style='color:grey;'>30</td>";
                            
                            for ($i=1; $i<=31; $i++){

                                if($i==7 || $i==14 || $i==21 || $i==28){
                                    echo "<tr>";
                                }

                                    echo "<td>";

                                    echo $i;

                                    echo "</td>";

                                if($i==6 || $i==13 || $i==20 || $i==27){
                                    echo "</tr>";
                                }

                            }
                            echo "
                            <td style='color:grey;'>1</td>
                            <td style='color:grey;'>2</td> 
                            <td style='color:grey;'>3</td>                 
                            ";

                        }
                        else if($selected=="November"){
                            echo "
                            <td style='color:grey;'>28</td>
                            <td style='color:grey;'>29</td>
                            <td style='color:grey;'>30</td>
                            <td style='color:grey;'>31</td>";
                            
                            for ($i=1; $i<=30; $i++){

                                if($i==4 || $i==11 || $i==18 || $i==25){
                                    echo "<tr>";
                                }

                                    echo "<td>";

                                    echo $i;

                                    echo "</td>";

                                if($i==3 || $i==10 || $i==17 || $i==24){
                                    echo "</tr>";
                                }

                            }
                            echo "
                            <td style='color:grey;'>1</td>                       
                            ";

                        }
                        else if($selected=="December"){
                            echo "
                            <td style='color:grey;'>25</td>
                            <td style='color:grey;'>26</td>
                            <td style='color:grey;'>27</td>
                            <td style='color:grey;'>28</td>
                            <td style='color:grey;'>29</td>
                            <td style='color:grey;'>30</td>
                            ";
                            
                            for ($i=1; $i<=31; $i++){

                                if($i==2 || $i==9 || $i==16 || $i==23|| $i==30){
                                    echo "<tr>";
                                }

                                    echo "<td>";

                                    echo $i;

                                    echo "</td>";

                                if($i==1 || $i==8 || $i==15 || $i==22|| $i==29){
                                    echo "</tr>";
                                }

                            }
                            echo "
                            <td style='color:grey;'>1</td>
                            <td style='color:grey;'>2</td> 
                            <td style='color:grey;'>3</td> 
                            <td style='color:grey;'>4</td> 
                            <td style='color:grey;'>5</td>                     
                            ";

                        }
                        

                    else{
                        echo "select month";
                    }
                        
                    } 
                    
                    ?>


                    
                </table>    

            </div>

            <div class="col-4">
            </div>
        </div> 
    </div>  
    
    <style>
        table{
            font-size:20px;
            border: 1px solid black;
            border-collapse: collapse;
            border-radius: 10px;
            padding : 5px;
        }
    </style>
</body>
</html>
