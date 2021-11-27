<?php
    include('Post.php');
    $post = Post::show($_REQUEST);
?>
<?php
    include('../template/header.php');
    include('../template/nav.php');
?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">

                <h3 class="my-3"><?php echo $post['title'];?></h3>
                <hr>
                <div><?php echo $post['author']; ?></div>
                <div class="mb-3">
                    <?php echo $post['content'];?>
                </div>
                <div>建立時間:<?php echo $post['created_at'];?></div>
                <div>最後更新時間:<?php echo $post['updated_at'];?></div>
                <hr>
                <a href="../index.php" class="btn btn-primary">回列表</a>
                <a href="edit.php?id=<?php echo $post['id'];?>" class="btn btn-success">編輯</a>
                <form action="delete.php" method="post" class="d-inline-block">
                    <input type="hidden" value="<?php echo $post['id'];?>" name="id">
                    <input type="submit" value="刪除" onclick="return confirm('確認刪除？')" class="btn btn-danger">
                </form>

            </div>
        </div>
    </div>
<?php
    include('../template/footer.php');
?>