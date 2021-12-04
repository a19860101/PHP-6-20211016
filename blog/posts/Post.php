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
        static function store($request,$file){
            extract($request);
            $cover = Post::upload($file['cover']);
            $sql = 'INSERT INTO posts(title,cover,content,author,category,created_at,updated_at)VALUES(?,?,?,?,?,?,?)';
            $now = DB::now();
            $stmt =DB::connect()->prepare($sql);
            $author = $_SESSION['AUTH']['user'];
            $stmt->execute([$title,$cover,$content,$author,$category,$now,$now]);
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
        static function upload($file){
            extract($file);

            if(!is_dir('images')){
                mkdir('images');
            }
            
            $ext = pathinfo($name,PATHINFO_EXTENSION);
            $imgName = md5(time()).'.'.$ext;
        
            if($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png' && $ext != 'gif'&& $ext != 'webp'&& $ext != 'svg'){
                echo '<script>alert("請上傳正確的圖片格式!")</script>';
                header('refresh:0;url=index.php');
                return;
            }
        
            $target = 'images/'.$imgName;
        
            if($error == 0){
                if(move_uploaded_file($tmp_name,$target)){
                    return $imgName;
                }else{
                    echo '上船錯誤';
                }
            }
        }
    }