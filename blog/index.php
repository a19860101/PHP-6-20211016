<?php
    include('posts/Post.php');
    $posts = Post::all();
    // print_r($_SESSION['AUTH']);
?>
<?php
    include('template/header.php');
    include('template/nav.php');
?>
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
                <a href="posts/show.php?id=<?php echo $post['id'];?>" class="btn btn-primary btn-sm">繼續閱讀</a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<?php
    include('template/footer.php');
?>