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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create.php">新增文章</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">登入</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">註冊</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">登出</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <div class="container">
        <div class="row">
            <div class="col-10 col-lg-8 mx-auto my-3">
                <h2>文章列表</h2>
                <hr>
            </div>

            <?php foreach($posts as $post){ ?>
            <div class="col-10 col-lg-8 p-3 mx-auto">
                <div class="post border shadow-sm p-3 rounded">
                    <h3><?php echo $post['title'];?></h3>
                    <div><?php echo $post['author'];?></div>
                    <div>分類:<?php echo $post['category']; ?></div>
                    <div class="my-3">
                        <?php echo $post['content'];?>
                    </div>
                    <div>建立時間:<?php echo $post['created_at'];?></div>
                    <div>最後更新時間:<?php echo $post['updated_at'];?></div>
                    <a href="show.php?id=<?php echo $post['id'];?>" class="btn btn-primary btn-sm">繼續閱讀</a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>