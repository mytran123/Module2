<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="post">
    <div class="">
        <h1>Simple Calculator</h1>
        <input type="number" name="first_operand" size="30"  placeholder="First operand" />
        <input type="text">
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="times">*</option>
            <option value="divide">/</option>
        </select>
<!--        <input type="select" name="operator" size="30" placeholder="Operator" />-->
        <input type="number" name="second_operand" size="30" placeholder="Second operand" />
        <button type="submit">Calculate</button>
    </div>
</form>
</body>
</html>
<?php
    $first = $_POST["first_operand"];
    $second = $_POST["second_operand"];
    if($_POST['operator'] == add) {
        echo "$first + $second";
    }
    else if($_POST['operator'] == subtract) {
        echo "$first - $second";
    }
    else if($_POST['operator'] == times) {
        echo "$first * $second";
    }
    else if($_POST['operator'] == divide) {
        echo "$first / $second";
    }
?>