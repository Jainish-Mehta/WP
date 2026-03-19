<form action="word_count.php" method="post" enctype="multipart/form-data">
    <input type="file" name="txt" accept=".txt">
    <input type="submit" name="submit" value="Submit">
</form>
<?php
if(isset($_POST['submit'])){
    $target_dir='uploads/';
    $target_files=$target_dir.basename($_FILES['txt']['name']);
    if(!is_dir($target_dir)){
        mkdir($target_dir);
    }
    if(move_uploaded_file($_FILES['txt']['tmp_name'],$target_files)){
        $content=file_get_contents($target_files);
        echo nl2br($content);
        $word_count=str_word_count($content);
        echo '<br><br>Total nubmers of words'.$word_count;
    }
}
?>