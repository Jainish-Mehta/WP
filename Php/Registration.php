<?php
    if(isset($_POST['Register'])){
        $First=$_POST['First'];
        $Middle=$_POST['Middle'];
        $Last=$_POST['Last'];
        echo "<p>$First $Middle $Last</p>";
        $Gender=$_POST['Gender'];
        echo "<p>$Gender</p>";
    }
?>