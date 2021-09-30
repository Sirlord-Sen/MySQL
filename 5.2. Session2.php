<?php

    session_start();

    echo "Your username is ".$_SESSION['username']."<br>";
    echo "Your email is ".$_SESSION['email']."<br>";

    //print_r($_SESSION); //  this would give you all the variables in the section, you use the print_r fuction
    
    // if you want to change a value, you can reestablish it and type your new entry.
    $_SESSION['username'] = "bartpino";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above three meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>PHP Session - Page 2</title>

        <!-- Bootsrap -->
        <link href="bootstrap-4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 shim and Respond.js for IE8 support of the HTML5 elememts and media queries -->
        <!-- WARNING: Respond.js deosnt work if you view the page via file:// -->
    </head>
    
    <body>
        <div class="container">
            <h1>PHP Session - Page 2</h1>
            
            <p><a href="5.3.%20logout.php">Log out of your session</a></p>
            
        </div>    
        
        <!-- jQuery (necessary fr bootstrap's JavaScript plugins) -->
        <script src="jquery-3.3.1.js"></script>
        
        <!-- Bootstrap of the JS -->
        <script src="bootstrap-4.1.3/js/bootstrap.min.js"></script>
    </body>
    
</html>