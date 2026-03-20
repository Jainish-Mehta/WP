    <?php
    $pass='123123123';
    if(preg_match('/\d{1,100}$/', $pass)){
        echo "Password is valid.";
    }
    else{
        echo "Password is invalid.";
    }
    ?>