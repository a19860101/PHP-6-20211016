<?php
    include(__DIR__.'/../pdo.php');
    class Category extends DB {
        static function store($request){
            extract($request);
            $sql = 'INSERT INTO categories(title)VALUES(?)';
            $stmt = DB::connect()->prepare($sql);
            $stmt->execute([$title]);
        }
        static function all(){
            $sql = 'SELECT * FROM categories ORDER BY id DESC';
            $stmt = DB::connect()->prepare($sql);
            $stmt -> execute();
            $data = $stmt->fetchAll();
            return $data;
        }
    }