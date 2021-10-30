<?php
    include('db.php');
    extract($_POST);
    
    //方法一
    // $sql = 'DELETE FROM students WHERE id = '.$id;
    // mysqli_query($db,$sql);

    //方法二
    $sql = 'DELETE FROM students WHERE id = ?';
    $stmt = $db->prepare($sql);
    $stmt->bind_param('i',$id);
    $stmt->execute();


    echo '<script>alert("資料已刪除!");</script>';
    header('refresh:0;url=index.php');
