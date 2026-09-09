<?php

function hello() {
    var_dump('Hello');
}

function helloName() {
    var_dump("Hello, $name!");
}

helloName('Karl');
helloName('Kundla');

$numbers = [1, 2, 3, 4, 5];
array_map(function ($number) {
    return $number * $number;
}, $numbers);
$squares = array_map(fn($number) => $number * $number, $numbers);
var_dump($squares);

function cube($a) {
    if($a < 0) {
        return 'Negative number';
    }
    return $a * $a * $a;
    var_dump('This will never be executed');
}

var_dump(cube(4));

$answer = cube(5);
$text = "Cube of 5 is $answer!";
echo $text;