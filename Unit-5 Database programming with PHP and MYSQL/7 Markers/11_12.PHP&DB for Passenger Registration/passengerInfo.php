
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "passenger_db";

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) !== TRUE) {
    echo "Error creating database: " . $conn->error;
}
$conn->select_db($dbname);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $photo_url = $_POST['photo_url'];

    $errors = [];

    if ($name == '') {
        $errors[] = "Name is required";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || $email == '') {
        $errors[] = "Invalid email format";
    }
    if ($mob == '' || !preg_match('/^[0-9]{10}$/', $mob)) {
        $errors[] = "Invalid mobile number";
    }
    if ($gender == '') {
        $errors[] = "Gender is required";
    }
    if ($address == '') {
        $errors[] = "Address is required";
    }
    if ($photo_url == '' || !filter_var($photo_url, FILTER_VALIDATE_URL)) {
        $errors[] = "Invalid photo URL";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        exit;
    }


    $sql = "CREATE TABLE IF NOT EXISTS passengers(
    id INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    mob VARCHAR(15) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    `address` TEXT NOT NULL,
    photo_url VARCHAR(255) NOT NULL
    )";

    if ($conn->query($sql) !== TRUE) {
        echo "Error creating table: " . $conn->error;
    }

    try {
    $sql = "INSERT INTO passengers (name,email,mob,gender,address,photo_url)
            VALUES ('$name','$email','$mob','$gender','$address','$photo_url')";
    $conn->query($sql);
    echo "<p style='color:green;'>Passenger registered successfully</p>";
} catch (mysqli_sql_exception $e) {
    if ($e->getCode() == 1062) {
        // Duplicate entry error
        if (strpos($e->getMessage(), "email") !== false) {
            echo "<p style='color:red;'>Duplicate entry: Email '$email' already exists.</p>";
        }
        
        if (strpos($e->getMessage(), "mob") !== false) {
            echo "<p style='color:red;'>Duplicate entry: Mobile '$mob' already exists.</p>";
        } 
    } else {
        echo "<p style='color:red;'>Error: " . $e->getMessage() . "</p>";
    }
}


    $res = $conn->query("SELECT * FROM passengers");
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            echo "ID: " . $row["id"] . "<br>  Name: " . $row["name"] . "<br>  Email: " . $row["email"] . "<br>  Mobile: " . $row["mob"] . "<br>  Gender: " . $row["gender"] . "<br>  Address: " . $row["address"] . "<br>  Photo URL: " . $row["photo_url"] . "<br>";
        }
    } else {
        echo "No passengers found";
    }

    $conn->close();
}
?>