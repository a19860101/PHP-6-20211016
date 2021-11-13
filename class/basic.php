<?php
    //宣告類別

    class Test {
        // 方法 -> function
        // 屬性 -> $

        public $x = 0;
        public $s = 'Hello';
    }

    //呼叫類別 建立實體
    $test = new Test;
    // print_r($test);

    // echo $test->x;
    // echo $test->s;
    $test->x = 999;
    echo $test->x;