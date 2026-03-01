<?php

    $count = 5;
    for($i = 1; $i <= $count; $i++){
        for($j = 0; $j < $i; $j++){
            echo ($i+$j)%2;
        }
        echo "<br>";
    }


?>