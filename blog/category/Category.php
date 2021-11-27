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
        static function delete($request){
            extract($request);
            $sql = 'DELETE FROM categories WHERE id = ?';
            $stmt = DB::connect()->prepare($sql);
            $stmt -> execute([$id]);
        }
    }