<?php
    $db_host = 'localhost';
    $db_user = 'admin';
    $db_pw = 'admin';
    $db_name = 'php-6-20211016';
    $db_charset = 'utf8mb4';

    $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
    //dsn = data source name
    // $dsn = 'mysql:host='.$db_host.';dbname='.$db_name.';charset='.$db_charset;

    $pdo = new PDO($dsn,$db_user,$db_pw);