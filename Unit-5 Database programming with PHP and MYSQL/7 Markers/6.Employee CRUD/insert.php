<?php
include("db.php");
$eid=$_POST['eid'];
$name=$_POST['name'];
$department=$_POST['department'];
$designation=$_POST['designation'];

$sql="INSERT INTO employee(id,`name`,department,designation) VALUES('$eid','$name','$department','$designation')";
if(mysqli_query($conn,$sql)){
    echo "Record inserted successfully";
}
else{
    echo "Failed to insert record!";
}
?>