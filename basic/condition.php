<?php
    // 判斷式

    // if()
    $x = 0;
    if($x > 0){
        echo "success";
    }

    //if...else
    if($x < 0){
        echo "success 2";
    }else{
        echo "error 2";
    }

    //if...else if

    if($x > 10){
        echo "1";
    }else if($x >0){
        echo "2";
    }

    //if...else if...else

    if($x > 0){
        echo "A";
    }else if($x < 0){
        echo "B";
    }else{
        echo "C";
    }


    // switch
    echo "<hr>";
    $i = 12;

    switch($i){
        case 0:
            echo 0;
            break;
        case 1:
            echo 1;
            break;
        case 2:
            echo 2;
            break;
        default:
            echo 'error';
    }

    echo "<hr>";

    switch(true){
        case $i > 0:
            echo 'A';
            break;
        case $i < 0:
            echo 'B';
            break;
        default:
            echo 'error';
    }

    // 三元運算子

    $a = 10;

    // if($a > 0){
    //     echo 'success';
    // }else{
    //     echo 'error';
    // }

    echo $a > 0 ? 'success':'error';