<!DOCTYPE html>
<!--
Zach Parker
Assignment 5
CSC 453
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Assignment 5</title>
        <style>
            h1{
                color: blue;
            }
            
            .submit{
                background-color: lightgreen;
                border-radius: 5px;
            }
            .wrapper{
                margin: 0 auto;
                max-width: 55em;
                background-color: white;
                display: block;
                padding-left: 1em;
                padding-right: 1em;
                padding-top: 1em;
                padding-bottom: 1em;
                box-shadow: 3px 3px 3px 3px gray;
                overflow: hidden;

            }
            body{
                background-color: lightblue;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <h1>US Census Population Change Calculator</h1>
        
        
        <form action="index.php" method="post">
        <div>
        <!--Year 1 drop down-->
        <label>Year 1:</label>

        <select name="year1">
          <option value="1790">1790</option>
          <option value="1800">1800</option>
          <option value="1810">1810</option>
          <option value="1820">1820</option>
          <option value="1830">1830</option>
          <option value="1840">1840</option>
          <option value="1850">1850</option>
          <option value="1860">1860</option>
          <option value="1870">1870</option>
          <option value="1880">1880</option>
          <option value="1890">1890</option>
          <option value="1900">1900</option>
          <option value="1910">1910</option>
          <option value="1920">1920</option>
          <option value="1930">1930</option>
          <option value="1940">1940</option>
          <option value="1950">1950</option>
          <option value="1960">1960</option>
          <option value="1970">1970</option>
          <option value="1980">1980</option>
          <option value="1990">1990</option>
          <option value="2000">2000</option>
          <option value="2010">2010</option>
        </select>
    </div>
        <!--Year 2 drop down-->
        <label>Year 2:</label>

        <select name="year2">
          <option value="1790">1790</option>
          <option value="1800">1800</option>
          <option value="1810">1810</option>
          <option value="1820">1820</option>
          <option value="1830">1830</option>
          <option value="1840">1840</option>
          <option value="1850">1850</option>
          <option value="1860">1860</option>
          <option value="1870">1870</option>
          <option value="1880">1880</option>
          <option value="1890">1890</option>
          <option value="1900">1900</option>
          <option value="1910">1910</option>
          <option value="1920">1920</option>
          <option value="1930">1930</option>
          <option value="1940">1940</option>
          <option value="1950">1950</option>
          <option value="1960">1960</option>
          <option value="1970">1970</option>
          <option value="1980">1980</option>
          <option value="1990">1990</option>
          <option value="2000">2000</option>
          <option value="2010">2010</option>
        </select>
        
        <p>
          <input type="submit" name="submit" class="submit" style="width: 150px;" value="Submit">
        </p>
        </form>
            
    </body>
        <?php
        if(isset($_POST['year1']) ){
            //array for census data
            $selected_year = array('1790' => 3929214, '1800' =>5236631, '1810'=>7239881, '1820'=>9638453, '1830'=>12866020,
                '1840'=>17069453,'1850'=>23191876,'1860'=>31443321,'1870'=>38558371,'1880'=>49371340,'1890'=>62979766,'1900'=>76212168,
                '1910'=>92228531,'1920'=>106021568,'1930'=>123202660,'1940'=>132165129,'1950'=>151325798,'1960'=>179323175,
                '1970'=>203211926,'1980'=>226545805,'1990'=>248709873,'2000'=>281421906,'2010'=>308745538);

            $selected_year2 = $_POST['year2'];
            $selected_year1 = $_POST['year1'];
            $selected_valyear2 = $selected_year[$_POST['year2']];
            $selected_valyear1 = $selected_year[$_POST['year1']];
            $change = number_format($selected_valyear2 - $selected_valyear1);

            //if the census change is negative, format it to be positive in the output
            $negativechange = number_format($selected_valyear1 - $selected_valyear2);

            //print outout
            echo'---------------------------------------------------------------';
            echo"<br>";
            echo'Population ', $selected_year1, ': ', number_format($selected_valyear1);
            echo"<br>";
            echo'Population ', $selected_year2, ': ', number_format($selected_valyear2);
            echo"<br>";
            echo'---------------------------------------------------------------';
            echo"<br>";
            if($change < 0){
                echo '<p style="color: red"> The population decreased by ', $negativechange, '</p>';
            }else if($change == 0){
                echo 'No population change';
            }
            else{
                echo '<p style="color: green"> The population increased by ', $change, '</p>';
            }
        }
        ?>
    </div>
    </body>
</html>
