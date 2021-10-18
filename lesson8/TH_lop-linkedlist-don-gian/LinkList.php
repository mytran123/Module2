<?php

class LinkList
{
    private $firstNode;
    private $lastNode;
    private $count;

    function __construct() {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    //thêm một node vào đầu
    public function inserFirst($data)
    {
        //khởi tạo node mới
        $node = new Node($data);
        //gán node kế sau của node mới khởi tạo là node đầu tiên của linklist
        $node->next = $this->firstNode;
        $this->firstNode = $node; //gán tiếp node đầu của danh sách là node mới khởi tạo

        //Kiểm tra, nếu node mới khởi tạo là node đầu tiên được thêm vào danh sách
        // thì sẽ đặt node đó là node cuối cùng của danh sách
        if (is_null($this->lastNode)) {
            $this->lastNode = $node;
        }
        $this->count++;
    }

    //thêm một node vào sau danh sách
    public function inserLast($data)
    {
        //kiểm tra nếu danh sách đã tồn tại
        // node bên trong thì sẽ khởi tạo một node mới
        if (!is_null($this->firstNode)) {
            $node = new Node($data);
            //Sau đó gán node kế tiếp phía sau của node cuối cùng hiện tại là node mới khởi tạo
            $this->lastNode->next = $node;
            //Vì là node cuối cùng nên node kế phía sau sẽ được gán giá trị NULL
            $node->next = null;
            $this->lastNode = $node; //có nghĩa là gán node mới khởi tạo là node cuối cùng của danh sách
            $this->count++;
        } else {
            $this->inserFirst($data);
        }
    }

    //tạo phương thức lấy số lượng node
    public function totalNodes()
    {
        return $this->count;
    }

    //tạo phương thức đọc ra danh sách
    public function readList()
    {
        $listData = [];
        $current = $this->firstNode;

        while (!is_null($current)) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}