<?php
$servername="localhost";
$username="root";
$password="";
$db="example";

$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    die("Failed to connect to Database");
}

$sql="CREATE TABLE IF NOT EXISTS PRAC(
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50),
    lastname VARCHAR(50),
    email VARCHAR(50)
    )";

    if($conn->query($sql) !== TRUE){
        echo 'Failed to create table';
    }
?>
<form action="" method="post">
    <label for="firstname">First Name:</label>
    <input type="text" name="firstname" placeholder="Enter First Name"><br>
    <label for="firstname">Last Name:</label>
    <input type="text" name="lastname" placeholder="Enter Last Name"><br>
    <label for="firstname">Email:</label>
    <input type="email" name="email" placeholder="Enter email"><br>
    <input type="submit" name="submit" value="Insert">
</form>
<?php
if(isset($_POST['submit'])){
    $fn=$_POST['firstname'];
    $ln=$_POST['lastname'];
    $email=$_POST['email'];

    $smt=$conn->prepare("INSERT INTO PRAC(firstname,lastname,email) VALUES(?,?,?)");
    $smt->bind_param('sss',$fn,$ln,$email);
    $smt->execute();
    echo "Record inserted successfully";
}
?>