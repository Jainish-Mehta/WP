<?php
    $fruits = array("Apple","Banana");
    foreach($fruits as $index => $fruit){
        echo "$index => $fruit <br>";
    }

    $student= array(
        "name" => "Adam",
        "Sem" => 6,
        "CPI" => 9.99
    );
    foreach($student as $key => $value){
        echo "$key => $value <br>";
    }

    $students= array(
        array(
            "Roll" => "101",
            "Name" => "Adam"
        ),
        array(
            "Roll" => "102",
            "Name" => "Bob"
        ),
        array(
            "Roll" => "103",
            "Name" => "Cris"
        )
    );

    foreach($students as $student){
        foreach($student as $key => $value){
            echo "$key => $value <br>";
        }
        echo "<br>";
    }
?>