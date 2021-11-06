<?php
    include('db.php');
    extract($_POST);

    $skill = implode(',',$skill);

    $sql = "UPDATE students
            SET 
            name    = '$name',
            phone   = '$phone',
            mail    = '$mail',
            edu     = '$edu',
            gender  = '$gender',
            skill   = '$skill'
            WHERE id = ".$id;

    mysqli_query($db,$sql);

    echo '<script>alert("資料已儲存!");</script>';
    header('refresh:0;url=index.php');
