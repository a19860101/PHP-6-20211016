<?php
    include('pdo.php');

    extract($_POST);
    $skill = implode(',',$skill);

    $sql = "INSERT INTO students(name,phone,mail,edu,gender,skill)VALUES(?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name,$phone,$mail,$edu,$gender,$skill]);

    echo '<script>alert("學員資料新增成功")</script>';
    header('refresh:0;url=index.php');