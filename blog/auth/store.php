<?php
    include('Auth.php');

    Auth::store($_REQUEST);

    echo '<script>alert("註冊成功，請重新登入!");</script>';
    header('refresh:0;url=../posts/index.php');