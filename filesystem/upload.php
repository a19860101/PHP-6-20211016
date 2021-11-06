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

    // echo $imgName;
    $target = 'images/'.$imgName;

    
    if($error == 0){
        if(move_uploaded_file($tmp_name,$target)){
            echo '上傳成功';
        }else{
            echo '上船錯誤';
        }
    }