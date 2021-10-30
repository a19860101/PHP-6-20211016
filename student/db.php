<?php
    $db_host = 'localhost';
    $db_user = 'admin';
    $db_pw = 'admin';
    $db_name = 'php-6-20211016';


    // 方法一
    // $db = @mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die('資料庫錯誤!');
    $db = mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die('資料庫錯誤!');

    mysqli_query($db,'SET NAMES utf8');
    // echo '資料庫連線成功';

    //方法二

    // $db = new mysqli($db_host,$db_user,$db_pw,$db_name);

    // // print_r($db);

    // if($db->connect_errno){
    //     echo $db->connect_error;
    // }

    // $db->query('SET NAMES utf8');