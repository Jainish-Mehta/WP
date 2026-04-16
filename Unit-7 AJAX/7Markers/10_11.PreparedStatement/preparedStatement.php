<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "example";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<form method="post">
    <input type="number" name="id" placeholder="ID (for update/delete)">
    <input type="text" name="username" placeholder="Username">
    <input type="text" name="email" placeholder="Email"><br><br>
    <input type="submit" name="add" value="Add Record">
    <input type="submit" name="show" value="Show Records">
    <input type="submit" name="update" value="Update Record">
    <input type="submit" name="delete" value="Delete Record">
</form>

<?php
if (isset($_POST['add'])) {
    $id = $_POST['id'] ?? '';
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    if ($username == '' || $email == '') {
        echo"Please fill in all fields.";
    } else {
        $stmt = $conn->prepare("INSERT INTO users (id, username, email) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $id, $username, $email);
        $stmt->execute();
        echo "Record added successfully.";
    }
}

if (isset($_POST['show'])) {
    $stmt = $conn->prepare("SELECT id, username, email FROM users");
    $stmt->execute();
    $result = $stmt->get_result();
    echo "<table  border='1'><tr><th>ID</th><th>Username</th><th>Email</th></tr>";
    echo "<caption><b>Users Table</b></caption>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["username"] . "</td><td>" . $row["email"] . "</td></tr>";
    }
    echo "</table>";
}

if (isset($_POST['update'])) {
    $id = $_POST['id'] ?? '';
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    if ($username == '' && $email == '') {
        echo "Please fill in at least one field.";
    } else {
        if($username != '' && $email != '') {
            $stmt = $conn->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
            $stmt->bind_param("ssi", $username, $email, $id);
            $stmt->execute();
            echo "Record updated successfully.";

        } elseif ($username != '') {
            $stmt = $conn->prepare("UPDATE users SET username = ? WHERE id = ?");
            $stmt->bind_param("si", $username, $id);
            $stmt->execute();
            echo "Record updated successfully.";
        } else {
            $stmt = $conn->prepare("UPDATE users SET email = ? WHERE id = ?");
            $stmt->bind_param("si", $email, $id);
            $stmt->execute();
            echo "Record updated successfully.";
        }
    }
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'] ?? '';
    if ($id == '') {
        echo "Please provide an ID to delete.";
    } else {
        $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        echo "Record deleted successfully.";
    }
}

$conn->close();
?>
