<?php
    include('../pdo.php');
    session_start();

    extract($_REQUEST);

    $sql = 'SELECT * FROM users WHERE user = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user]);

    $row = $stmt->fetch();

    if(!$row){
        echo '帳號不存在';
    }

    if($row['pw'] == md5(sha1($pw))){
        echo '成功登入';
    }else{
        echo '帳號或密碼錯誤';
    }