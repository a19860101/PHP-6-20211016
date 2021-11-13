<?php
    include('../pdo.php');

    extract($_REQUEST);

    $pw = md5(sha1($pw));

    $sql_check = 'SELECT * FROM users WHERE user = ?';
    $stmt_check = $pdo->prepare($sql_check);
    $stmt_check->execute([$user]);

    // echo $stmt_check->rowCount();
    if($stmt_check->rowCount() > 0){
        echo '<script>alert("此帳號已被使用，請重新輸入!");</script>';
        header('refresh:0;url=create.php');
        return;
    }


    $sql = 'INSERT INTO users(user,pw,created_at)VALUES(?,?,?)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user,$pw,$now]);

    echo '<script>alert("註冊成功，請重新登入!");</script>';
    header('refresh:0;url=index.php');