<?php

//array

// $a = array();

// $a[0] = 'Apple';
// $a[1] = 'Banana';
// $a[2] = 'Cat';

// $a = array('Apple','Banana','Cat');

$a = ['Apple','Banana','Cat','Dog','egg'];

// print_r($a);
// var_dump($a);

// 陣列迭代

// 計算陣列長度
// echo count($a);

// for($i=0;$i<count($a);$i++){
//     echo $a[$i];
// }

//foreach

foreach($a as $data){
    echo $data;
    echo '<br>';
}

// 關聯陣列

$user = [
    'name' => 'John',
    'age' => 18,
    'mail' =>'asdf@gmail.com'
];

// print_r($user);
// echo $user['name'];
// echo $user['age'];
// echo $user['mail'];

foreach($user as $key => $val){
    echo $key.':'.$val;
    echo '<br>';
}
echo '<hr>';


// implode() 陣列->字串

// echo implode('___',$a);
echo implode(',',$user);
echo '<br>';

// explode() 字串->陣列

$s = 'john_18_asdf@gmail.com';
$sArray = explode('_',$s);
print_r($sArray);
echo '<br>';

// in_array()

var_dump(in_array('Apple',$a));
var_dump(in_array('test',$a));
echo '<br>';

// is_array()
var_dump(is_array($a));
var_dump(is_array($s));
echo '<br>';

// extract() 解構

extract($user);
echo $name,$age,$mail;
echo '<br>';

// compact() 緊湊

$title = 'iPhone 13';
$size = '128GB';
$color = 'White';

// $iphone = [$title,$size,$color];
// $iphone = [
//     'title'=>$title,
//     'size'=>$size,
//     'color'=>$color
// ];
$iphone = compact('title','size','color');
print_r($iphone);
echo '<br>';



// shuffle()

shuffle($a);
print_r($a);
echo '<br>';

// sort();

$ary = ['banana','egg','cat','apple','dog'];
sort($ary);

// rsort()
rsort($ary);
print_r($ary);
echo '<br>';

// ksort()

ksort($user);
print_r($user);
echo '<br>';

// krsort()
krsort($user);
print_r($user);
echo '<br>';

// asort(),arsort()
$t = [
    'small'=>480,
    'large'=>1024,
    'medium'=>768
];
arsort($t);
print_r($t);