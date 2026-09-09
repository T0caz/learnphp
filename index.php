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

$box1 = new Box();
$box1->length = 30;
$box1->width = 10;
$box1->height = 20;
$box1->open();
var_dump($box1);
var_dump($box1->volume());

$box2 = new Box();
$box2->length = 50;
$box2->width = 40;
$box2->height = 30;
$box2->open();
var_dump($box2);
var_dump($box2->volume());