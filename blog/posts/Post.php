<?php
    include(__DIR__.'/../pdo.php');
    class Post extends DB {
        static function all(){
            $sql = 'SELECT * FROM posts ORDER BY id DESC';
            $stmt = DB::connect()->prepare($sql);
            $stmt -> execute();
            $data = $stmt->fetchAll();
            return $data;
        }
        static function show($request){
            extract($request);
            $sql = 'SELECT * FROM posts WHERE id = ?';
            $stmt = DB::connect()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
            return $data;
        }
        static function edit($request){
            extract($request);
            $sql = 'SELECT * FROM posts WHERE id = ?';
            $stmt = DB::connect()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
            return $data;
        }
        static function store($request){
            extract($request);
            $sql = 'INSERT INTO posts(title,content,author,category,created_at,updated_at)VALUES(?,?,?,?,?,?)';
            $now = DB::now();
            $stmt =DB::connect()->prepare($sql);
            $author = $_SESSION['AUTH']['user'];
            $stmt->execute([$title,$content,$author,$category,$now,$now]);
        }
        static function update($request){
            extract($request);
            $sql = 'UPDATE posts SET
                    title=?,
                    content=?,
                    category=?,
                    updated_at=?
                    WHERE id = ?
            ';
            $now = DB::now();
            $stmt = DB::connect()->prepare($sql);
            $stmt->execute([$title,$content,$category,$now,$id]);
        }
        static function delete($request){
            extract($request);
            $sql = 'DELETE FROM posts WHERE id = ?';
            $stmt = DB::connect()->prepare($sql);
            $stmt->execute([$id]);
        }
    }