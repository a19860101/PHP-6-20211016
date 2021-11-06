<?php
    include('../pdo.php');
    extract($_FILES['img']);

    
    if(!is_dir('images')){
        mkdir('images');
    }
    
    $ext = pathinfo($name,PATHINFO_EXTENSION);
    $imgName = md5(time()).'.'.$ext;

    if($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png' && $ext != 'gif'&& $ext != 'webp'&& $ext != 'svg'){
        echo '<script>alert("請上傳正確的圖片格式!")</script>';
        header('refresh:0;url=index.php');
        return;
    }

    $target = 'images/'.$imgName;

    $sql = 'INSERT INTO galleries(title,name,created_at)VALUES(?,?,NOW())';
    $stmt = $pdo->prepare($sql);

    
    if($error == 0){
        if(move_uploaded_file($tmp_name,$target)){
            $stmt->execute([$name,$imgName]);
            echo '<script>alert("上傳成功!")</script>';
            header('refresh:0;url=index.php');
        }else{
            echo '上船錯誤';
        }
    }