<?php
    include('posts/Post.php');
    $posts = Post::all();
    print_r($posts);
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
            <a href="posts/create.php">新增文章</a>
            <a href="#">登入</a>
            <a href="#">登出</a>
            <a href="#">註冊</a>
        </div>
    </nav>
    <div class="container">
        <h2>文章列表</h2>
    </div>
</body>
</html>