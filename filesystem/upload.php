<?php

    // print_r($_FILES);
    // print_r($_FILES['img']);
    extract($_FILES['img']);

    if($error == 0){
        move_uploaded_file($tmp_name,$name);
    }