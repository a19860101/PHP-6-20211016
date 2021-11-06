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
        <label for="">帳號</label>
        <input type="text" name="user">
        <input type="submit" value="送出">
    </form>
    <a href="sessionRemove.php">移除session</a>
    <?php
        // print_r($_SESSION);
        if($_SESSION){
            echo $_SESSION['USER'];
        }else{
            echo '目前尚無SESSION';
        }
    ?>
</body>
</html>