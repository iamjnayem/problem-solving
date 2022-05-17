<?php

require_once './ListNode.php';

class LinkedList{
    private $_firstNode = NULL;
    private $_totalNodes = 0;

    public function insert(string $data = NULL){
        $newNode = new ListNode($data);

        if($this->_firstNode === NULL){
            $this->_firstNode = &$newNode;
        }else{
            $currentNode = $this->_firstNode;
            while($currentNode->next !== NULL){
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
        $this->_totalNodes++;
        return true;
    }
    public function display(){
        echo "Total book titles: " . $this->_totalNodes . "\n";

        $currentNode = $this->_firstNode;

        while($currentNode){
            echo $currentNode->data . "\n";
            $currentNode = $currentNode->next;
        }

    }

    public function insertAtFirst(string $data=NULL){
        $newNode = new ListNode($data);
        if($this->_firstNode === NULL){
            $this->_firstNode = &$newNode;
        }else{
            $currentFirstNode = $this->_firstNode;
            $this->_firstNode = &$newNode;
            $newNode->next = $currentFirstNode;
        }
        $this->_totalNodes++;
        return true;
    }

    public function search(string $data = NULL){
        if($this->_totalNodes){
            $currentNode = $this->_firstNode;
            while($currentNode){
                if($currentNode->data === $data){
                    return $currentNode;
                }
                $currentNode = $currentNode->next;
            }
            return false;
        }
    }


}

$BookTitles = new LinkedList();
$BookTitles->insert("Introduction to Algorithm");
$BookTitles->insert("Introduction to PHP and Data structures");
$BookTitles->insert("Programming Intelligence");
$BookTitles->display();