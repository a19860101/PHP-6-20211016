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
            <?php 
                if($post['cover'] == ''){
            ?>
            <img src="https://via.placeholder.com/1200x600/cccccc/222222?text=NO COVER" class="w-100">
            <?php }else{ ?>
            <img src="posts/images/<?php echo $post['cover'];?>" class="w-100">
            <?php } ?>
            <div class="post border shadow-sm p-3 rounded-bottom">
                <h3><?php echo $post['title'];?></h3>
                <div>作者:<?php echo $post['author'];?></div>
                <div>分類:<?php echo $post['category']; ?></div>
                <div class="my-3">
                    <?php 
                        $content = strip_tags($post['content']);
                        echo mb_substr($content,0,100);
                        
                    ?>...
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