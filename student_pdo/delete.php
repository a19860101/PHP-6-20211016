<?php
    include('pdo.php');
    extract($_POST);
    $sql = 'DELETE FROM students WHERE id = ?';
    $stmt = $pdo->prepare($sql);

    $stmt->execute([$id]);

    echo '<script>alert("資料已刪除")</script>';
    header('refresh:0;url=index.php');