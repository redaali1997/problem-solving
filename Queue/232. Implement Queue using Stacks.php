<?php
class MyQueue {
    private $inStack = [];
    private $outStack = [];

    /**
     */
    function __construct() {
        
    }
  
    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        array_push($this->inStack, $x);
    }
  
    /**
     * @return Integer
     */
    function pop() {
        $this->transfer();

        return array_pop($this->outStack);
    }
  
    /**
     * @return Integer
     */
    function peek() {
        $this->transfer();

        return $this->outStack[count($this->outStack) - 1];
    }
  
    /**
     * @return Boolean
     */
    function empty() {
        return empty($this->inStack) && empty($this->outStack);
    }

    private function transfer() {
        if(empty($this->outStack)) {
            while(! empty($this->inStack)) {
                array_push($this->outStack, array_pop($this->inStack));
            }
        }
    }
}

/**
 * Your MyQueue object will be instantiated and called as such:
 * $obj = MyQueue();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->peek();
 * $ret_4 = $obj->empty();
 */

$obj = new MyQueue();
$obj->push(1);
$obj->push(2);
$obj->push(3);
$ret_2 = $obj->pop();
$ret_3 = $obj->peek();
$ret_4 = $obj->empty();

var_dump($ret_2);
var_dump($ret_3);
var_dump($ret_4);