<?php

class Box {
    public $length;
    pr $width;
    private $height;
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

class MetalBox extends Box {
    public $weight;

    public function mass() {
        return $this->weight * $this->volume();
    }
}

$metal1 = new MetalBox();
var_dump($metal1);