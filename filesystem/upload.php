<?php

    // print_r($_FILES);
    // print_r($_FILES['img']);
    extract($_FILES['img']);

    
    if(!is_dir('images')){
        mkdir('images');
    }
    
    $ext = pathinfo($name,PATHINFO_EXTENSION);
    $imgName = md5(time()).'.'.$ext;
    // $imgName = md5(uniqid()).'.'.$ext;

    if($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png' && $ext != 'gif'&& $ext != 'webp'&& $ext != 'svg'){
        echo '<script>alert("請上傳正確的圖片格式!")</script>';
        header('refresh:0;url=index.php');
        return;
    }

    // echo $imgName;
    $target = 'images/'.$imgName;

    
    if($error == 0){
        if(move_uploaded_file($tmp_name,$target)){
            echo '上傳成功';
        }else{
            echo '上船錯誤';
        }
    }