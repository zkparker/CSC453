<!DOCTYPE html>
<!--
Zach Parker
Assignment 3 - PHP 
CSC 453
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Assignment 3</title>
        <style>
                        
            div{
                text-align: left;
                align-items: center;
                background-color: lightgrey;  
            }
            h1{
                background-color: gray;
                text-align: center;
                color: white;
            }
        </style>
    </head>
    <body>
        <?php 
        //Variables 
        $length = $_POST['length'];
        $width = $_POST['width'];
        $height = $_POST['height'];
        $radius = $_POST['radius'];
        $cheight = $_POST['cheight'];
        $recvolume = $width * $length * $height;
        $conevolume = (1/3) *  pi() * ($radius * $radius) * $cheight;
        
        //Display output with calcuations 
        
        //Rectangle output
        echo '<h1>Volume Calculator Output</h1>',
             '<div>Summary of Calculations:<br>',
              '<h4>Volume of Rectangle</h4>',
             'Length: ', $length,'<br>',
              'Width: ', $width,'<br>',
              'Height: ', $height,'<br>',
              'The volume of the Rectangle is ', '<b>' , $recvolume ,'</b>',
         //Cone output  
              '<h4>Volume of a Cone</h4>'
             .'Radius: ', $radius,'<br>',
              'Height: ', $cheight,'<br>',
              'The volume of the Cone is ', '<b>' , $conevolume ,'</b></div>';                     
        ?>
    </body>
</html>
