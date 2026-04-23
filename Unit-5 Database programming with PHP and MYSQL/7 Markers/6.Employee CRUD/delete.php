<?php
include("db.php");
$eid=$_POST['eid'];

$sql="DELETE FROM employee WHERE id='$eid'";
if(mysqli_query($conn,$sql)){
    echo "Record Deleted Successfully";
}
?>