<?php
    include('Post.php');
    $posts = Post::all();
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
        <h2>文章列表</h2>
        <?php foreach($posts as $post){ ?>
        <div class="post">
            <h3><?php echo $post['title'];?></h3>
            <div><?php echo $post['author'];?></div>
            <div>分類:<?php echo $post['category']; ?></div>
            <div>建立時間:<?php echo $post['created_at'];?></div>
            <div>最後更新時間:<?php echo $post['updated_at'];?></div>
            <div>
                <?php echo $post['content'];?>
            </div>
            <a href="show.php?id=<?php echo $post['id'];?>">繼續閱讀</a>
        </div>
        <?php } ?>
    </div>
</body>
</html>