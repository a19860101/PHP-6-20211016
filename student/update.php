<?php
    include('db.php');
    extract($_POST);

    $skill = implode(',',$skill);
    // 方法一
    // $sql = "UPDATE students
    //         SET 
    //         name    = '$name',
    //         phone   = '$phone',
    //         mail    = '$mail',
    //         edu     = '$edu',
    //         gender  = '$gender',
    //         skill   = '$skill'
    //         WHERE id = ".$id;

    // mysqli_query($db,$sql);

    // 方法二

    $sql = "UPDATE students SET name=?,phone=?,mail=?,edu=?,gender=?,skill=? WHERE id=?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('ssssssi',$name,$phone,$mail,$edu,$gender,$skill,$id);
    $stmt->execute();

    echo '<script>alert("資料已儲存!");</script>';
    header('refresh:0;url=index.php');
