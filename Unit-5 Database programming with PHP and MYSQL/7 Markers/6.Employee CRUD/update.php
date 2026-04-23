<?php
include("db.php");
$id=$_POST['eid'];
$name=$_POST['name'];
$department=$_POST['department'];
$designation=$_POST['designation'];

$sql="UPDATE employee SET `name`='$name',department='$department',designation='$designation'";
if(mysqli_query($conn,$sql)){
    echo "Record Updated Successfully";
}
?>