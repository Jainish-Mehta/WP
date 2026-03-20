<?php
if(isset($_POST['submit'])){
    $target_dir='uploads/';
    $taget_files=$target_dir.basename($_FILES['txt']['name']);
    if(!is_dir($target_dir)){
        mkdir($target_dir);
    }
    if(move_uploaded_file($_FILES['txt']['tmp_name'],$taget_files)){
        echo 'Text File uploaded Sucessfully';
    }
    else{
        echo "Error while uploading text file";
    }
}
?>