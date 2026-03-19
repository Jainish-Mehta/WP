<?php
if (isset($_POST['submit'])) {
    echo $_POST['name'] . "<br>";

    $targetPhotoDir = 'Candidate_Photos/';
    $targetSignDir = 'Candidate_Signatures/';

    $targetPhotoFiles = $targetPhotoDir . basename($_FILES['photo']['name']);
    $targetSignFiles = $targetSignDir . basename($_FILES['sign']['name']);
    if (!is_dir($targetPhotoDir)) {
        mkdir($targetPhotoDir);
    }
    if (!is_dir($targetSignDir)) {
        mkdir($targetSignDir);
    }

    if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetPhotoFiles)) {
        echo '<img src="' . $targetSignFiles . '" width="500" height="500"><br>';
    }
    if (move_uploaded_file($_FILES['sign']['tmp_name'], $targetSignFiles)) {
        echo '<img src="' . $targetPhotoFiles . '" width="500" height="500"><br> ';
    }
}
