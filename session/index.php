<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sessionStore.php" method="post">
        <div>
            <label for="">帳號</label>
            <input type="text" name="user">
        </div>
        <div>
            <label for="">密碼</label>
            <input type="password" name="pw">
        </div>
        <div>
            <label for="">Mail</label>
            <input type="text" name="mail">
        </div>
        <input type="submit" value="送出">
    </form>
    <div>
        <a href="sessionRemove.php">移除session</a>
    </div>
    <?php
        // print_r($_SESSION);
        if($_SESSION){
            echo '帳號:'.$_SESSION['AUTH']['user'];
            echo '<br>';
            echo '密碼:'.$_SESSION['AUTH']['pw'];
            echo '<br>';
            echo 'Mail:'.$_SESSION['AUTH']['mail'];
        }else{
            echo '目前尚無SESSION';
        }
    ?>
</body>
</html>