<?php
    include('../pdo.php');

    extract($_REQUEST);

    $pw = md5(sha1($pw));

    $sql = 'INSERT INTO users(user,pw,created_at)VALUES(?,?,?)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user,$pw,$now]);

    echo '<script>alert("註冊成功，請重新登入!");</script>';
    header('refresh:0;url=index.php');