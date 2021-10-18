<?php

class LinkedList
{
    private $count;
    private $firstNode;
    private $lastNode;

    function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    public function add($index)
    {
        
    }

    public function addFirst($data)
    {
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;

        if (is_null($this->lastNode)) {
            $this->lastNode = $node;
        }
        $this->count++;
    }

    public function addLast($data)
    {
        if (!is_null($this->firstNode)) {
            $node = new Node($data);
            $this->lastNode->next = $node;
            $node->next = null;
            $this->lastNode = $node;
            $this->count++;
        } else {
            $this->addFirst($data);
        }
    }

    public function remove($index)
    {
        
    }

    public function get($index)
    {
        
    }

    public function size()
    {
        return $this->count;
    }

    public function printList()
    {
        $listData = [];
        $current = $this->firstNode;

        while (!is_null($current)) {
            array_push($listData,$current->readNode());
            $current = $current->next;
        }
        return $listData;
    }

    //clone()

    public function contains()
    {
        
    }

    public function indexOf()
    {
        
    }
}