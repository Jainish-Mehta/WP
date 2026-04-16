<?php
$fruits = array("apple", "banana", "orange", "grape");
echo "Before Sorting: ";
echo implode(", ", $fruits) . "<br>";
sort($fruits);
echo "After Sorting: ";
echo implode(", ", $fruits) . "<br>";
?>