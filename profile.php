<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above three meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Login</title>

        <!-- Bootsrap -->
        <link href="bootstrap-4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 shim and Respond.js for IE8 support of the HTML5 elememts and media queries -->
        <!-- WARNING: Respond.js deosnt work if you view the page via file:// -->
    </head>
    
    <body>
        <div class="container">
            <h1>Profile Page</h1>
            <p class="lead">Welcome <?php echo $_SESSION['loggedInUser']; ?>!</p>
            
            <p>Your email address is: <?php echo $_SESSION['loggedInEmail']; ?></p>
            
            <p><a href="5.3.%20logout.php" class="btn btn-danger btn-sm">Log out</a></p>
           
        </div>
      
            
            
        
        <!-- jQuery (necessary fr bootstrap's JavaScript plugins) -->
        <script src="jquery-3.3.1.js"></script>
        
        <!-- Bootstrap of the JS -->
        <script src="bootstrap-4.1.3/js/bootstrap.min.js"></script>
    </body>
    
</html>