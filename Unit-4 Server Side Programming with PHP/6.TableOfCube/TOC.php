<?php
$n=$_POST['num'];
if(isset($_POST['num'])){
    echo "<table style='border-collapse: collapse; ' border='1'><tr style='background-color: #f2f2f2;' ><th>Number</th><th>Cube</th></tr>";
    for($i=0;$i<$n;$i++){
        echo "<tr><td>".($i+1)."</td><td> ".pow($i+1,3)."</td></tr>";
    }
    echo "</table>";
}
else{
    echo "Please enter a number.";
}
?>