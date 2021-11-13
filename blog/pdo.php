<?php

class DB {
    function __construct(){
        
    }
    function now(){
        date_default_timezone_set('Asia/Taipei');
        $now = date('Y-m-d H:i:s');
        return $now;
    }
    function connect(){
        $db_host = 'localhost';
        $db_user = 'admin';
        $db_pw = 'admin';
        $db_name = 'php-6-20211016';
        $db_charset = 'utf8mb4';
        
        $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
        try {
        
            $pdo = new PDO($dsn,$db_user,$db_pw);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            //主動例外
        
        }catch(PDOException $e){
            // print_r($e);
            echo $e->getMessage();
        }
        return $pdo;
    }
}





