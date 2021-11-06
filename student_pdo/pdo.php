<?php
    $db_host = 'localhost';
    $db_user = 'admin';
    $db_pw = 'admin';
    $db_name = 'php-6-20211016';
    $db_charset = 'utf8mb4';

    $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
    //dsn = data source name
    // $dsn = 'mysql:host='.$db_host.';dbname='.$db_name.';charset='.$db_charset;

    //例外處理
    try {

    $pdo = new PDO($dsn,$db_user,$db_pw);

        // $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);
        //不主動報錯(預設)

        // $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        //主動報錯

        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //主動例外

    }catch(PDOException $e){
        // print_r($e);
        echo $e->getMessage();
    }


    // $sql = 'SELECT * FROM test';
    // $result = $pdo -> exec($sql); //mysqli_query , $stmt->execute();

    // if($result){
    //     echo 'success';
    // }else{
    //     echo $pdo->errorCode();
    //     // var_dump($pdo->errorInfo());
    // }

    // try {
    //     $sql = 'SELECT * FROM test';
    //     $result = $pdo -> exec($sql);
    // }catch(PDOException $e){
    //     echo $e->getMessage();
    // }