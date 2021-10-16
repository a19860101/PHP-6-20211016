<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // echo "hello php";
        // print_r("hello php 2");
        // var_dump("hello php 3");

        // 註解 ctrl + /

        // 變數
        // 不可數字開頭
        // 不可使用特殊符號
        // 大小寫有別
        $a = 100;
        $b = "hello world!";
        // echo $b;
        // print_r($b);
        // var_dump($b);

        $a++;

        // echo  "您是第$a 位訪客";
        // echo  "您是第{$a}位訪客";
        // echo  '您是第{$a}位訪客';
        // echo  '您是第$a 位訪客';
        echo  '您是第'.$a.'位訪客';

        //常數

        define("USER","Mary");
        define("AGE",30);
        // AGE++;
        echo AGE;

        // 資料型態
        /* 
            1. 字串 string
            2. 整數 integer 
            3. 浮點數 float
            4. 布林 boolean true/false
        
        */
        
        $x = 0;
        var_dump($x);
    ?>    
</body>
</html>