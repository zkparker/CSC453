<!--
Zach Parker
Assignment 1
CSC 453
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Assignment 1</title>
        
        <h1>PHP and HTML</h1>
        
        <style type="text/css">
            .first-class{
                font-size: 2em;
                font-weight: bold;
                font-style: italic;
            }
            </style>
    </head>
    <body>
    <p>
      Learning HTML is fun<br>
      Learning HTML is very easy
    </p>
        <p>
            <?php
                print "<span class=\"first-class\">Learning PHP is fun</span><br>";
                print "<span class=\"first-class\">Learning PHP is very easy</span>";
            ?>
        </p>
    </body>
</html>
