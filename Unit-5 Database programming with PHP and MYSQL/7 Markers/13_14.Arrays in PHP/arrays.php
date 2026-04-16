<?php
$students = array("Alice", "Bob", "Charlie", "David");
echo "Students: " . implode(", ", $students) . "<br><br><br><br>";
?>

<?php
$student = array(
    "name" => "Alice",
    "age" => 20,
    "grade" => "A"
);

foreach ($student as $key => $val) {
    echo $key . ": " . $val . "<br>";
}

echo "<br><br><br><br>";
?>


<?php
$students = array(
    array("name" => "Alice", "age" => 20, "grade" => "A"),
    array("name" => "Bob", "age" => 22, "grade" => "B"),
    array("name" => "Charlie", "age" => 21, "grade" => "A")
);

foreach($students as $student => $val) {
    foreach($val as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }
    echo "<br>";
}
?>