<?php
    include('Post.php');
    $post = Post::show($_REQUEST);
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
    <nav>
        <div class="menu">
            <a href="create.php">新增文章</a>
            <a href="#">登入</a>
            <a href="#">登出</a>
            <a href="#">註冊</a>
        </div>
    </nav>
    <div class="container">
        <h3><?php echo $post['title'];?></h3>
        <div><?php echo $post['author']; ?></div>
        <div>
            <?php echo $post['content'];?>
        </div>
        <a href="index.php">回列表</a>
        <a href="edit.php?id=<?php echo $post['id'];?>">編輯</a>
        <form action="delete.php" method="post">
            <input type="hidden" value="<?php echo $post['id'];?>" name="id">
            <input type="submit" value="刪除" onclick="return confirm('確認刪除？')">
        </form>
    </div>
</body>
</html>