<?php
//khởi tạo một đối tượng LinkedList.
//Sau đó gọi đến các phương thức để thêm
//các phần tử mới vào phía đầu và cuối ,
//sau đó lấy ra tổng số lượng node,
//cuối cùng hiển thị toàn bộ các phần tử của LinkedList ra.
include_once "Node.php";
include_once "LinkList.php";

$linkedList = new LinkList();

$linkedList->inserFirst(11);
$linkedList->inserFirst(22);
$linkedList->inserLast(33);
$linkedList->inserLast(44);
$totalNodes = $linkedList->tatalNodes();
$linkData = $linkedList->readList();

echo $totalNodes;
echo "<br>";
echo implode('-',$linkData);
