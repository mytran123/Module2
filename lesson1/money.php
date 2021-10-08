<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="post">
    <div class="">
        <h2>Save money</h2>
        <input type="hidden" name="inventment" size="30"  placeholder="Inventment Amount" />
        <input type="hidden" name="interest_rate" size="30" placeholder="Yearly Interest Rate" />
        <input type="hidden" name="years" size="30" placeholder="Number of Years" />
        <button type="submit">Calculate</button>
    </div>
</form>
</body>
</html>
<?php
    $investment = $_POST['investment'];
    $interest_rate = $_POST['interest_rate'];
    $years = $_POST['years'];

    //Tính Giá trị Tương lai theo công thức đã cho.
    //Công thức tính giá trị tương lai cho 1 năm
    //Giá trị Tương lai = Giá trị Hiện tại + (Giá trị Hiện tại * Lãi suất)
    echo ($investment + ($investment * $interest_rate)) * $years;

?>
