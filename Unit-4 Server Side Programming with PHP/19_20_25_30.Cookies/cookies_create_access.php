<?php
setcookie("Key", "Value", time() + 3600);

if (isset($_COOKIE["Key"])) {
    echo "Cookie Value: " . $_COOKIE["Key"];
} else {
    echo "Cookie is not set.";
}

?>