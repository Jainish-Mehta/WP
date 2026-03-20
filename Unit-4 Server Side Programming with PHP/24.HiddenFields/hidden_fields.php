<?php
if(isset($_POST["username"])) {
    $username = $_POST["username"];
    echo "Hello, " . htmlspecialchars($username) . "!";
} else {
    echo "Please enter your username.";
}
?>