<?php
if(isset($_POST['Upload'])){
    $target_dir='uploads/';
    $target_file= $target_dir . basename($_FILES['img']['name']);
    if(!is_dir($target_dir)){
        mkdir($target_dir);
    }

    if(move_uploaded_file($_FILES['img']['tmp_name'],$target_file)){
        echo "File uploaded successfully.";
        echo '<img src="' . $target_file . '" alt="Uploaded Image">';
    } else {
        echo "<p style='color:red;'>Error uploading file.</p>";   
    }
}
?>