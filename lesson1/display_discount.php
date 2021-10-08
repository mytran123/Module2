<?php
    $product = $_POST['product'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    //Công thức tính chiết khấu
    //Discount Amount = List Price * Discount Percent * 0.1
    echo $price * $discount * 0.1;
?>