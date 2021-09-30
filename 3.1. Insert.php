<?php 

include ('2.2. Connection.php');

if(isset( $_POST["add"])) {
        
        //build a function that validates data
        function validateFormData( $formData ) {
            $formData = trim( stripslashes(htmlspecialchars( $formData )) );
            return $formData;
        }
        
        // check to see if inputs are empty
        // create variables with form data
        // wrap the data with our function
    
        // set all variables to empty by default
        $username = $email = $password = "";
        
        if( !$_POST["username"] ) {
            $usernameError = "Please enter your username <br>";
        } else {
            $username = validateFormData( $_POST["username"] );
        }
        
        if( !$_POST["email"] ) {
            $emailError = "Please enter your email <br>";
        } else {
            $email = validateFormData( $_POST["email"] );
        }
    
        if( !$_POST["password"] ) {
            $passwordError = "Please enter your password <br>";
        } else {
            $password = validateFormData( $_POST["password"] );
        }
    
        // check to see if each variables has data
        if( $username && $password && $email ) {
            
                $query = "INSERT INTO users (id, username, password, email, signup_date, biography)
                VALUES (NULL, '$username', '$password', '$email', CURRENT_TIMESTAMP, NULL)";
    
                if ( mysqli_query($conn, $query) ) {
                    echo "<div class='alert alert-success'>New record in database!</div>";
                        } else {
                    echo "Error:". $query . "<br>" . mysqli_error($conn); 
                }
        }
    
    } 


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above three meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>MySQL Select</title>

        <!-- Bootsrap CSS -->
        <link href="bootstrap-4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 shim and Respond.js for IE8 support of the HTML5 elememts and media queries -->
        <!-- WARNING: Respond.js deosnt work if you view the page via file:// -->
    </head>
    
    <body>
        <div class="container">
            <h1>MySQL Insert</h1>
            
            <p class="text-danger">* Required fields</p>
            
            <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post"> <!-- This helps for security reasons -->
                
                <small class="text-danger">* <?php echo $usernameError; ?></small>
                <input type="text" placeholder="Username" name="username"><br><br>
                
                <small class="text-danger">* <?php echo $emailError; ?></small>
                <input type="email" placeholder="Email" name="email"><br><br>
                
                <small class="text-danger">* <?php echo $passwordError; ?></small>
                <input type="password" placeholder="Password" name="password"><br><br>
                
                <input type="submit" name="add" value="Add Entry">
            </form>
            
        </div> <!-- Container -->   
        
        <!-- jQuery (necessary fr bootstrap's JavaScript plugins) -->
        <script src="jquery-3.3.1.js"></script>
        
        <!-- Bootstrap of the JS -->
        <script src="bootstrap-4.1.3/js/bootstrap.min.js"></script>
    </body>
    
</html>
