<?php
    include('../pdo.php');
    session_start();

    extract($_REQUEST);

    $sql = 'SELECT * FROM users WHERE user = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user]);

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    print_r($row);

    if(!$row){
        echo '<script>alert("帳號不存在!");</script>';
        header('refresh:0;url=index.php');
        return;
    }

    if($row['pw'] == md5(sha1($pw))){
        $_SESSION['AUTH'] = $row;
        if($row['role'] == 0){
            echo '<script>alert("管理員登入成功");</script>';
            header('refresh:0;url=admin/index.php');
        }else{
            echo '<script>alert("登入成功");</script>';
            header('refresh:0;url=index.php');
        }
        

    }else{
        echo '<script>alert("帳號或密碼錯誤");</script>';
        header('refresh:0;url=index.php');
    }