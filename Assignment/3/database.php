<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "example";

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully<br>";
}
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->select_db($database);
$sql = "CREATE TABLE IF NOT EXISTS eg(
`index` VARCHAR(10) PRIMARY KEY,
name VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO eg (`index`, name) VALUES ('101', 'Adam')";
if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully<br>";
} else {
    echo "Error inserting record: " . $conn->error;
}

$res = $conn->query("SELECT * FROM eg");
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        echo "Index: " . $row["index"] . "  Name: " . $row["name"] . "<br>";
    }
} else {
    echo "No records found";
}

$sql = "DELETE FROM eg WHERE `index`='101'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully<br>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>