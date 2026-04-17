<?php

    setcookie("username", "John Doe", time() + 3600);
    if(isset($_COOKIE["username"])) {
        echo "Welcome " . $_COOKIE["username"];
        setcookie("username", "", time() - 3600); 
    } else {
        echo "Welcome Guest!";
    }
?>