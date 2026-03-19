<?php
if(isset($_POST['clear'])){
    session_start();
    unset($_SESSION['cart']);
    echo 'Cart Cleared!';
}
?>
<form action="cart.php" method="post">
    <input type="submit" name="back" value="back">
</form>