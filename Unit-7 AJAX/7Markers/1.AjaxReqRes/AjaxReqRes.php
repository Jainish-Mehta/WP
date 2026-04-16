<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"] ?? "Guest";
    echo "Hello, " . htmlspecialchars($name) . "! This is the server response.";
} else {
    echo "Invalid request!";
}
?>
