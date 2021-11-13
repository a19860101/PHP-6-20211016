<?php
    include('../pdo.php');

    extract($_REQUEST);

    $sql = 'INSERT INTO users(user,pw,created_at)VALUES(?,?,now())';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user,$pw]);

    echo '<script>alert("註冊成功，請重新登入!");</script>';
    header('refresh:0;url=index.php');