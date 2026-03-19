<form action="data.php" method="post">
    <input type="text" name="data">
    <input type="submit" name="submit" value="Submit">
</form>
<?php
if(isset($_POST['submit'])){
    $data=$_POST['data'];

    if(preg_match("/^[0-9]+$/",$data)){
        echo 'Data contains only numbers<br>';
    }
    else{
        echo 'Data does not only contain numbers<br>';
    }

    if(preg_match('/^[A-Za-z]/',$data)){
        echo 'Data starts with capital letter<br>';
    }
    else{
        echo 'Data does not start with capital letter<br>';
    }

    if(preg_match("/@/",$data)){
        echo 'Data contains special character @<br>';
    }
    else{
        echo 'Data does not contains special character @<br>';
    }
}
?>