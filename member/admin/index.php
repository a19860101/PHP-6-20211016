<?php
    include('../../pdo.php');
    session_start();
    $webroot = 'http://localhost/php-6-20211016/member/';

    if($_SESSION['AUTH']['role'] != 0){
        header('Location:'.$webroot);
        return;
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('../nav.php'); ?>
    <h1>管理介面</h1>
</body>
</html>