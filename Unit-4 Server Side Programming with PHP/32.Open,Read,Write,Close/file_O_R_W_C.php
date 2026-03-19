<form action="file_O_R_W_C.php" method="post">
    <input type="text" name="data" >
    <input type="submit" name="submit" value="Write">
</form>

<?php
if(isset($_POST['submit'])){
    $data=$_POST['data'];
    $filename='upload.txt';
    $file=fopen($filename,'w') or die('Unable to open file');
    fwrite($file,$data."\n");
    fclose($file);
    $file=fopen($filename,'r');
    $content=fread($file,filesize($filename));
    echo nl2br($content);
}
?>