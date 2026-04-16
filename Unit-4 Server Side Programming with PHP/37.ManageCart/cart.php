<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (isset($_POST['add'])) {
    $item = trim($_POST['item']);
    if ($item != "") {
        $_SESSION['cart'][] = $item;
        echo '<p style="color:green;">' . $_POST["item"] . ' added to cart</p>';
    } else {
        echo '<p style="color:red;">Please enter an item name</p>';
    }
}

if (isset($_POST['view'])) {
    header("Location:view_cart.php");
}
?>
<form method="post" style="display: flex; flex-direction: column;">
    <input type="text" name="item" placeholder="Enter item name">
    <input type="submit" name="add" value="Add">
    <input type="submit" name="view" value="View Cart">
</form>