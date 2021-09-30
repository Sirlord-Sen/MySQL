<?php

$server   = "localhost";
$username = "root";
$password = "root";
$db       = "my_first_database";

// Create a connection
$conn = mysqli_connect( $server, $username, $password, $db );

// Check connection
if (!$conn) {
    die("Connection failted:" . mysqli_connect_error() );
}

//echo "Connection successfully!";
    
?>