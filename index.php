<?php

class Box {
    public $length;
    public $width;
    public $height;
    public $isOpen = false;
    public $hasBeenOpened = false;

    public function open() {
        $this->isOpen = true;
        $this->hasBeenOpened = true;
    }

    public function close() {
        $this->isOpen = false;
    }

    public function volume() {
        return $this->length * $this->width * $this->height;
    }
}

$num1 = 1;
$num2 = $num1;
$num1 = 2;
var_dump($num1, $num2);

$box1 = new Box();
$box1->width = 1;
$box2 = $box1;
$box2->width = 2;
var_dump($box1->width, $box2->width);