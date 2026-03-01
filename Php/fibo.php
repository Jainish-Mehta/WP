<?php
    if(isset($_POST['Calculate'])){
        $n=$_POST['num'];
        $a=0;
        $b=1;
        echo "<p>Fibonacci series up to $n terms: </p>";
        echo "<ul>";
        for($i=0;$i<$n;$i++){
            echo "<li>$a</li>";
            $temp=$a;
            $a=$b;
            $b=$temp+$b;
        }
    }
?>