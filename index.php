<!DOCTYPE html>
<!--
Zach Parker
Assignment 4
CSC 453
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
                        
            h1{
                text-align: center;
                color: blue;
            }
            .submit{
                background-color: lightgreen;
                border-radius: 5px;
                color: white;
                border: 1px solid black;
            }
            div{
                align-content: center;
            }
            body{
                 background: lightblue;
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
            table{
                border: 1px solid black;
                align-content: center;
                border-collapse: collapse;
                width: 500px;
            }
            td{
                max-width:100px;
                border: 1px solid black;
                font-weight: bold;
                font-size: 14pt;
                display: table-cell;
                
               
            }
            th{
                border-bottom: 1px solid black;
                text-align: center;
                padding-left: 100px;
                padding-right: 100px;
                padding-top: 10px;
                padding-bottom: 10px;
                
            }
            input[type=number]{
                width: 100px;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
        <form action ="index.php" method="post">
            <h1>Number Chart</h1>
            <p>Enter Limit: <input type="number" name="value" min="10"  step="10" max="500"></p>
            <input type="submit" name="submit" value="Submit" class="submit" style="margin-bottom:10px">
        <?php
        
        $input = $_POST['value'] ?? ' ';
        
        echo '<table with="10px">
            <tr>
            <th colspan="10">1 - ',$input,' Prime Numbers are Red</th>
            </tr>';
        
        //Algorithm for checking for prime number
        function primeCheck($n) 
        { 
            
            if ($n <= 1) 
                return false; 
            

            
            for ($i = 2; $i < $n; $i++)
                if ($n % $i == 0) 
                    return false; 
                
            
            return true; 
            
            
        } 
        
        echo'<tr colspan="10" width="100px">';
        $counter = -1;
        for($i=1;$i <= $input; $i++){
            $counter++;
            
            if($counter % 10 == 0){
                echo'<tr></tr>';
                   
                $counter = 0;
            }
            if(primeCheck($i)){ 
              //  echo'<tr>
                
               echo' <td style="color: red" align="center">', $i, '</td>';
               // </tr>';
            }
            else{
              //  echo'<tr>
               echo '<td style="color: black" align="center">', $i, '</td>';
               // </tr>';
                }
            }
            echo'</tr>';

        '</table>';
        
        
        ?>
            </div><!--end of wrapper-->
    </body>
</html>
