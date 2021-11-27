<?php 
    include('../pdo.php');

    // namespace blog\Auth ;

    class Auth extends DB {
        static function store(){

            extract($_REQUEST);

            $pw = md5(sha1($pw));
            $now = DB::now();

            $sql_check = 'SELECT * FROM users WHERE user = ?';
            $stmt_check = DB::connect()->prepare($sql_check);
            $stmt_check->execute([$user]);

            if($stmt_check->rowCount() > 0){
                echo '<script>alert("此帳號已被使用，請重新輸入!");</script>';
                header('refresh:0;url=register.php');
                return;
            }


            $sql = 'INSERT INTO users(user,pw,created_at)VALUES(?,?,?)';
            $stmt = DB::connect()->prepare($sql);
            $stmt->execute([$user,$pw,$now]);

        }
    }