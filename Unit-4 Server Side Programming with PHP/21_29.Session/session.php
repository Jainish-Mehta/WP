<?php
session_start();

$_SESSION['username']='Bob';

if (isset($_SESSION['username'])) {
    echo "Welcome, " . $_SESSION['username'] . "!";
} else {
    echo "No session found.";
}
?>