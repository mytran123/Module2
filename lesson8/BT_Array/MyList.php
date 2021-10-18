<?php

class MyList
{
    public $size;
    public $elements;

    public function __construct($size, $arr = "")
    {
        if (is_array($arr)) {
            $this->elements = $arr;
        } else {
            $this->elements = [];
        }
    }

    public function insert($index,$obj)
    {
        array_splice($this->elements, $index, 0, $obj);
    }

    public function add($obj)
    {
        array_push($this->elements,$obj);
    }

    public function size() //lấy về số lượng phần tử
    {
        return count($this->myList);
    }

    public function remove($index) //xóa
    {
        array_splice($this->elements, $index, 1);
    }

    public function get($index)
    {
        return $this->elements[$index];
    }

    public function clear()
    {
        unset($index);
    }

    public function addAll($arr)
    {

    }

    public function indexOf($obj)
    {
        array_search($obj, $this->elements);
    }

    public function isEmpty() //kiểm tra rỗng
    {

    }

    public function sort()
    {

    }

    public function reset()
    {

    }
}