<?php
include("db.php");
$id = $_POST['eid'];
if($id!=""){
$sql = "SELECT * FROM employee WHERE id='$id'";
}
else{
$sql = "SELECT * FROM employee";
}
$res = mysqli_query($conn, $sql);
echo "<table border='1'>";
echo "<tr><th>Employee ID</th><th>Employee Name</th><th>Employee Department</th><th>Employee Designation</th></tr>";

while ($row = mysqli_fetch_assoc($res)) {
    echo '<tr>  
                <td>' . $row['id'] . '</td>
                <td>' . $row['name'] . '</td>
                <td>' . $row['department'] . '</td>
                <td>' . $row['designation'] . '</td>
                <tr>';
}
echo "</table>";
?>
