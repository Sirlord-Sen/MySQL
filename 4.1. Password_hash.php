<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above three meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Password Hashing</title>

        <!-- Bootsrap -->
        <link href="bootstrap-4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 shim and Respond.js for IE8 support of the HTML5 elememts and media queries -->
        <!-- WARNING: Respond.js deosnt work if you view the page via file:// -->
    </head>
    
    <body>
        <div class="container">
            <h1>Password Hashing</h1>
            
            <?php
            
//                $password = password_hash("mypassword", PASSWORD_DEFAULT);
//                echo $password;
                     
                $hashedPassword = '$2y$10$lt3tiUU8c/8qFgfUEsKK4.QnEtYyLSpVXJatZLZsQX9M4ORoPuWpS';    
                
                
                if( isset( $_POST['login'] ) ) {
                    
                    if ( password_verify ( $_POST['password'], $hashedPassword ) ) {
                    echo "Password is correct";
                } else {
                    echo "Incorrect password";
                    }
                    
                }
            
            ?>
            
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                
                <label>* Password</label>
                <input type="password" placeholder="Password" name="password"><br><br>
                
                <input type="submit" name="login" value="Log in" class="btn btn-default">
                
            </form>
            
        </div>    
        
        <!-- jQuery (necessary fr bootstrap's JavaScript plugins) -->
        <script src="jquery-3.3.1.js"></script>
        
        <!-- Bootstrap of the JS -->
        <script src="bootstrap-4.1.3/js/bootstrap.min.js"></script>
    </body>
    
</html>