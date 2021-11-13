<?php
    class Post extends DB {
        function store($request){
            extract($request);
            $sql = 'INSERT INTO posts(title,content,author,category,created_at,updated_at)VALUES(?,?,?,?,?,?)';
            $author = '';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$title,$content,$author,$category,$this->now(),$this->now()]);
        }
    }