<?php
    include('../pdo.php');
    extract($_REQUEST);
    $sql = 'UPDATE galleries SET title=? WHERE id =?';

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title,$id]);

    echo '<script>alert("資料已儲存")</script>';
    header('refresh:0;url=list.php');