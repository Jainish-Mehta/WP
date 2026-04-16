<?php
if (isset($_POST['submit'])) {
    $id = $_POST['ID'];
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    echo "Employee ID: " . htmlspecialchars($id) . "<br>";
    echo "Employee Name: " . htmlspecialchars($name) . "<br>";
    echo "Employee Designation: " . htmlspecialchars($designation) . "<br>";
}
?>