<?php
    //方法一
    include('db.php');
    extract($_POST);

    $sql = 'DELETE FROM students WHERE id = '.$id;
    mysqli_query($db,$sql);

    echo '<script>alert("資料已刪除!");</script>';
    header('refresh:0;url=index.php');
