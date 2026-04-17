<?php
 session_start();
 if(!isset($_SESSION['card'])) {
    $_SESSION['card']=array();
 }

 if(isset($_POST['add'])){
    $item=$_POST['item'];
    if($item != ""){
        $_SESSION['card'][]=$item;
        echo '<p style="color:green;">'.$item.' added to cart</p>';
    }
    else{
        echo '<p style="color:red;">Failed to Add '. $item .'</p>';
    }
 }

 if(isset($_POST['clear'])){
    $_SESSION['card']=array();
 }
?>
 <form action="" method="post">
    <input type="text" name="item" placeholder="Enter item name">
    <input type="submit" name="add" value="Add Item">
    <input type="submit" name="clear" value="Clear Cart">
 </form>


<?php 

if(!empty($_SESSION['card'])){
    echo "<ul>";
    foreach($_SESSION['card'] as $carditem){
        echo '<li>'.$carditem.'</li>';
    }    
    echo "</ul>";
}
?>