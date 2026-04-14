<?php
$students= array(
    array("enroll"=>"01", "name"=>"A", "sem"=>6, "per"=>89),
    array("enroll"=>"02", "name"=>"B", "sem"=>6, "per"=>86),
    array("enroll"=>"03", "name"=>"C", "sem"=>6, "per"=>81)
);
echo "<h2>Student Information</h2>";
echo "<table border='1'>";
echo "<tr><th>Enrollment No.</th><th>Name</th><th>Semester</th><th>Percentage</th></tr>";
foreach($students as $student){
    echo "<tr>";
    echo "<td>".$student['enroll']."</td>";
    echo "<td>".$student['name']."</td>";
    echo "<td>".$student['sem']."</td>";
    echo "<td>".$student['per']."</td>";
    echo "</tr>";
}
echo "</table>";

?>