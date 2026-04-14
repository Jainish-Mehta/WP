<?php
session_start();
$_SESSION["username"] = "AJAX";
$_SESSION["role"]="XML";

echo "Username: " . $_SESSION["username"] . "<br>";
echo "Role: " . $_SESSION["role"];

echo '<br> <br> <br> <br> <br> <br>';

setcookie('username', 'AJAX', time() + 3600);
if (isset($_COOKIE['username'])) {
    echo "Cookie Value: " . $_COOKIE['username'];
} else {
    echo "Cookie is not set yet.";
}
?>