<h2>Your Shopping Cart</h2>
<?php
session_start();
if (!empty($_SESSION['cart']) && is_array($_SESSION['cart'])) {
    echo '<ul>';
    foreach ($_SESSION['cart'] as $item) {
        echo "<li>" . $item . "</li>";
    }
    echo '</ul>';
} else {
    echo "Cart is Empty";
}

?>

<form action="clear_cart.php" method="post">
    <input type="submit" name="clear" value="Clear Cart">
</form>