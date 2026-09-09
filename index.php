<?php

class Cat {
    use MakeSound;
}

class Dog {
    use HasSmell, MakeSound;
}

trait hasSmell {
    public $smell;
    public function sniff() {
        return 'Smells like' . $this->smell;
    }
}

trait MakeSound {
    public $sound;
    public function makeSound() {
        return $this->sound;
    }
}