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

if (isset($_POST['back'])) {
    header("Location:cart.php");
}

if (isset($_POST['clear']) && !empty($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
    header("Location:clear_cart.php");
}

if (!empty($_SESSION['cart'])) {
    echo '<form method="post">';
    echo '<input type="submit" name="back" value="Back to Cart">';
    echo '<input type="submit" name="clear" value="Clear Cart">';
    echo '</form>';
}  
else {
    echo '<form method="post">';
    echo '<input type="submit" name="back" value="Back to Cart">';
    echo '</form>';
} 

?>