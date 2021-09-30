<?php 

include ('2.2. Connection.php');

$query = "SELECT * FROM users";
$result = mysqli_query( $conn, $query );

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above three meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>MySQL Select</title>

        <!-- Bootsrap -->
        <link href="bootstrap-4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 shim and Respond.js for IE8 support of the HTML5 elememts and media queries -->
        <!-- WARNING: Respond.js deosnt work if you view the page via file:// -->
    </head>
    
    <body>
        <div class="container">
            <h1>MySQL Select</h1>
            
            <?php
            
                if ( mysqli_num_rows($result) > 0 ) {
    
    // we have data!
    // output the data
    
   echo "<table class='table table-bordered'><tr><th>ID</th><th>Username</th><th>Email</th><th>Biography</th></tr>";
    
    while ( $row = mysqli_fetch_assoc($result) ) {
        echo "<tr><td>". $row["id"] ."</td><td>". $row["username"] ."</td><td>". $row["email"] ."</td><td>". $row["biography"] ."</td></tr>"; 
    }
    
    echo "</table>"; 
    
} else {
    echo "Whoops! No results";
}

mysqli_close($conn); 

            
            ?>
            
        </div>    
        
        <!-- jQuery (necessary fr bootstrap's JavaScript plugins) -->
        <script src="jquery-3.3.1.js"></script>
        
        <!-- Bootstrap of the JS -->
        <script src="bootstrap-4.1.3/js/bootstrap.min.js"></script>
    </body>
    
</html>