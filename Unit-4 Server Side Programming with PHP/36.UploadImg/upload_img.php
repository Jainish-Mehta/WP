<?php
if(isset($_POST['submit'])){
    $dir='uploads/';
    $files=$dir. basename($_FILES['photo']['name']);
    if(!is_dir($dir)){
        mkdir($dir);
    }
    if(move_uploaded_file($_FILES['photo']['tmp_name'],$files)){
        echo '<img src="'.$files.'" alt="Photo">';
    }
    else{
        echo "Image was lost in the process";
    }
}
?>
