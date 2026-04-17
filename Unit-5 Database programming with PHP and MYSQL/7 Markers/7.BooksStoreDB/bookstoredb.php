<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'bookstore';
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sql) !== TRUE) {
    echo "Error creating database: " . $conn->error;
}
$conn->select_db($database);

$sql = "CREATE TABLE IF NOT EXISTS bookinfo(
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(100) NOT NULL,
        author VARCHAR(50) NOT NULL,
        price DECIMAL(10,2) NOT NULL
        )";
if ($conn->query($sql) !== TRUE) {
    echo "Error creating table: " . $conn->error;
}

?>
<form action="" method="post">
    <label for="title">Book Name:</label>
    <input type="text" name="title" placeholder="Enter Book title"><br>
    <label for="author">Author:</label>
    <input type="text" name="author" placeholder="Enter Author name"><br>
    <label for="price">Price:</label>
    <input type="number" name="price" placeholder="Enter Price"><br>
    <input type="submit" name="add" value="Add">
    <input type="submit" name="show" value="Show">
</form>
<?php
if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];

    if ($title == '' || $author == '' || $price == '') {
        echo "<p style='color:red;'>All Fields must be filled</p>";
    } else {

        $sql = "INSERT INTO bookinfo (title, author, price) VALUES ('$title', '$author', '$price')";
        if ($conn->query($sql) === TRUE) {
            echo "<p style='color:green;'>Book added successfully</p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

if (isset($_POST['show'])) {
    $res = $conn->query("SELECT * FROM bookinfo");
    if ($res->num_rows >= 0) {
        echo "<table border='1'><tr><th>ID</th><th>TITLE</th><th>AUTHOR</th><th>PRICE</th></tr>";
        while ($row = $res->fetch_assoc()) {
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['title'] . "</td><td>" . $row['author'] . "</td><td>" . $row['price'] . "</td></tr>";
        }
        echo "</table>";
    }
}
?>