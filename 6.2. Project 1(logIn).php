<?php

if( isset( $_POST['login'] )){
    
    // build a function to validate data
    function validateFormData($formData) {
        $formData = trim( stripslashes(htmlspecialchars( $formData ) ) );
        return $formData;
    }
    
    //create variables
    //wrap the data with our function
    $formUser = validateFormData( $_POST['username'] );
    $formPass = validateFormData( $_POST['password'] );
    
    // connect to database
    include ('2.2. Connection.php');
    
    // create SQL query
    $query = "SELECT username, email, password FROM users WHERE username='$formUser'";
    
    //store result
    $result = mysqli_query( $conn, $query );
    
    // verify if the result is returned
    if( mysqli_num_rows($result) > 0 ) {
        
        // store basic user data in some variables
        while( $row = mysqli_fetch_assoc($result) ) {
            $user       = $row['username'];
            $email      = $row['email'];
            $hashedPass = $row['password'];
        }
        
        // verify hashed password with the typed password
        if( pasword_verify( $formPass, $hashedPass ) ) {
            
            //correct login details
            //start the session
            session_start();
            
            //store data in SESSION variables
            $_SESSION['loggedInUser']= $user;
            $_SESSION['loggedInEmail']= $email;
            
            header("Location: profile.php");
            
        } else { // hashed password didn't verify
            
            // error message
            $loginError = "<div class='alert alert-danger'>Wrong username / password combination. Try again.</div>";
            
        }
    } else {  // there are no results in the database
        
        $loginError = "<div class='alert alert-danger'>No such user in the database. Please try again. <a class='close' data-dismiss='alert'>&times;</a></div>";
        
    }
        
    
    // close the mysql connection
    mysqli_close($conn);
}

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
            <h1>Login</h1>
            <p class="lead">Use this form to log in to your account</p>
            
            
            <?php echo $loginError; ?>
            
            <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                
                <div class="form-group">
                    <label for="login-username" class="sr-only">Username</label>
                    <input type="text" class="form-control" id="login-username" placeholder="username" name="username">
                </div>
                <div class="form-group">
                    <label for="login-password" class="sr-only">Password</label>
                    <input type="password" class="form-control" id="login-password" placeholder="password" name="password">
                </div>
                <button type="submit" class="btn btn-default" name="login">Log In!</button>
                
            
            </form>
        </div>
      
            
            
        
        <!-- jQuery (necessary fr bootstrap's JavaScript plugins) -->
        <script src="jquery-3.3.1.js"></script>
        
        <!-- Bootstrap of the JS -->
        <script src="bootstrap-4.1.3/js/bootstrap.min.js"></script>
    </body>
    
</html>