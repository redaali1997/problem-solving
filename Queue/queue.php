<?php

class MyQueue {
    private $items = [];

    public function push(int $x): void {
        array_push($this->items, $x);
    }

    public function pop(): int {
        return array_shift($this->items);
    }
}