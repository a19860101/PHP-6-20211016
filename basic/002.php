<?php
    // 運算子

    // 算術運算子
    $x = 100;
    $y = 60;
    echo $x + $y; //160
    echo "<br>";
    echo $x - $y; //40
    echo "<br>";
    echo $x * $y; //6000
    echo "<br>";
    echo $x / $y; //1.6666
    echo "<br>";
    echo $x % $y; // 40
    echo "<br>";
    
    // 比較運算子
    var_dump($x > $y); //true
    echo "<br>";
    var_dump($x < $y); //false
    echo "<br>";
    var_dump($x >= $y); //true
    echo "<br>";
    var_dump($x <= $y); //false
    echo "<br>";
    var_dump($x == $y); //false
    echo "<br>";
    var_dump($x != $y); //true
    echo "<br>";
    
    // 指定運算子
    
    echo $x = $y; // 60
    echo "<br>";
    echo $x += $y; // $x = $x + $y 120
    echo "<br>";
    echo $x -= $y; // $x = $x - $y 60
    echo "<br>";
    echo $x *= $y; // $x = $x * $y 3600
    echo "<br>";
    echo $x /= $y; // $x = $x / $y 60
    echo "<br>";
    echo $x %= $y; // $x = $x % $y 0
    echo "<br>";
    
    // 邏輯運算子 && || !
    
    var_dump($x > 0 && $y > 0);
    echo "<br>";
    var_dump($x > 0 || $y > 0);
    echo "<br>";
    var_dump(!$x);
    echo "<br>";

    // $i = 0;
    // $i = '';
    // $i = null;
    $i = false;
    
    // var_dump(!$i);
    echo "<br>";
    // var_dump(isset($i));
    echo "<br>";
    var_dump(is_null($i));
    


?>