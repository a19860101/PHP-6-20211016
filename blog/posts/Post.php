<?php
    include('../pdo.php');
    class Post extends DB {
        static function all(){
            $sql = 'SELECT * FROM posts';
            $stmt = DB::connect()->prepare($sql);
            $stmt -> execute();
            $data = $stmt->fetchAll();
            return $data;
        }
        static function store($request){
            extract($request);
            $sql = 'INSERT INTO posts(title,content,author,category,created_at,updated_at)VALUES(?,?,?,?,?,?)';
            $author = '';
            $now = DB::now();
            $stmt =DB::connect()->prepare($sql);
            $stmt->execute([$title,$content,$author,$category,$now,$now]);
        }
    }