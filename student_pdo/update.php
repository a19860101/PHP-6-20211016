<?php
    include('pdo.php');
    extract($_POST);
    $skill = implode(',',$skill);

    $sql = 'UPDATE students SET name=?,phone=?,mail=?,edu=?,gender=?,skill=? WHERE id=?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name,$phone,$mail,$edu,$gender,$skill,$id]);

    echo '<script>alert("資料已儲存")</script>';
    header('refresh:0;url=index.php');