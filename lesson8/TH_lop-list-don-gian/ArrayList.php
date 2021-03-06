<?php

class ArrayList
{
    public $arrayList;

    public function __construct($arr = "") //khởi tạo phương thức không tham số
    {
        if (is_array($arr)) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = [];
        }
    }

    //thêm một phần tử vào cuối danh sách
    public function add($obj)
    {
        array_push($this->arrayList,$obj);
    }

    public function size()
    {
        return count($this->arrayList);
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }
}