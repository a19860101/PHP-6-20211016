<?php
// function 函式

function test(){
    echo 'test';
}

// $t = test();
// var_dump($t);

function test2(){
    return 'test';
}

$t2 = test2();
var_dump($t2);


function num($n){
    return "您是第{$n}位訪客";
}

// echo num(99);
$n = num(123);
echo $n;

function square($w,$h){
    return $w * $h;
}

echo square(123,10);
