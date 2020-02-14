<!DOCTYPE html>
<!--
Zach Parker
Assignment 2 - PHP 
CSC 453
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Assignment 2</title>
        <style>
            table, td, th{
                border: 2px solid green;
                border-collapse: collapse;
                padding: 8px;
                font-style: italic;
                align-items: center;
            }
            
            body{
                text-align: left;
                align-items: center;
                background-color: lightgrey;  
            }
        </style>
    </head>
    <body>
        <?php 
        //Variables 
        $name = $_POST['name'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $email = $_POST['email'];
        $customer_type = $_POST['customer_type'];
        $comments = $_POST['comments'];
        
        //Display table with user information
        echo '
            <h1>Customer Record</h1>
            <table>
              <tr>
                <th>Name:</th>
                <td>', $name, '</td>
              </tr>
              <tr>
                <th>Address:</th>
                <td>', $address, '</td>
              </tr>
              <tr>
                <th>City:</th>
                <td>', $city, '</td>
              </tr>
              <tr>
                <th>State:</th>
                <td>', $state, '</td>
              </tr>
              <tr>
                <th>Zip Code:</th>
                <td>', $zip, '</td>
              </tr>
              <tr>
                <th>Email:</th>
                <td>', $email, '</td>
              </tr>
              <tr>
                <th>Customer Type:</th>
                <td>', $customer_type, '</td>
              </tr>
              <tr>
                <th>Notes:</th>
                <td>', $comments, '</td>
              </tr>
            </table>';
        ?>
    </body>
</html>
