<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "example";

$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("Failed to connect to Database!");
}

$sql = "CREATE TABLE IF NOT EXISTS employee(
id INT(10) PRIMARY KEY,
`name` VARCHAR(50),
department VARCHAR(50),
designation VARCHAR(50)
) ";

if($conn->query($sql)!==TRUE){
    echo "Failed to Create TABLE";
}
?>
