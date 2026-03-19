<?php
if (isset($_POST['submit'])) {
    echo "Name:  " . $_POST['name'] . "<br>";
    echo "Mobile:  " . $_POST['mobile'] . "<br>";
    echo "Email:  " . $_POST['email'] . "<br>";
    echo "Address:  " . $_POST['address'] . "<br>";

    $target_dir='passenger_img/';
    $target_files=$target_dir.basename($_FILES['photo']['name']);
    if(!is_dir($target_dir)){
        mkdir($target_dir);
    }
    if(move_uploaded_file($_FILES['photo']['tmp_name'],$target_files)){
        echo '<img src="'. $target_files .'" alt="Photo">';
    }
    else{
        echo"<p style='color=red';></p>";
    }
}
