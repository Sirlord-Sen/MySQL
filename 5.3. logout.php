<?php

    // clear all session variables
    session_unset();

    // destroy the session
    session_destroy();

    echo "You've been loggesd out! See you next time.<br>";

    print_r($_SESSION); // this is not going to display anything because there is nothing in it.  
        


?>