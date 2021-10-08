<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="display_discount.php" method="post">
    <div class="">
        <h2>Product Discount Calculator</h2>
        <input type="text" name="product" size="30"  placeholder="Product Description" />
        <input type="number" name="price" size="30" placeholder="List Price" />
        <input type="number" name="discount" size="30" placeholder="Discount Percent" />
        <button type="submit">Calculate Discount</button>
    </div>
</form>
</body>
</html>
<?php
