<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chuyển đổi tiền tệ</title>
</head>
<body>
<form ac="" method="post">
    <input type="text" id="money" name="money">
    <select name="" id="select1">
        <option value="a">VND</option>
        <option value="b">USD</option>
    </select>
    <select name="" id="select2">
        <option value="a">VND</option>
        <option value="b">USD</option>
    </select>
    <button>Submit</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["money"])) {
        readNumber($_POST["money"]);
    }
}

function changeNumber() {
    $moneyEnter = ;
    if (select1 == select2) {
        echo
    }
}



