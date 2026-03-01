<?php
    $filename="Demo.txt";
    $file=fopen($filename,'r') or die("Unable to open file");
    $content=fread($file,filesize($filename));
    fclose($file);

    echo "<p>$content</p>";
    echo 'Total number of Words:'. str_word_count($content);
?>