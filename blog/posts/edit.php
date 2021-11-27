<?php
    include('Post.php');
    $post = Post::edit($_REQUEST);
?>
<?php 
    include('../template/header.php');
    include('../template/nav.php');
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 my-3">
            <h2>編輯文章</h2>
            <hr>
        </div>
        <div class="col-10">
            <form action="update.php" method="post">
                <div class="mb-3">
                    <label class="form-label" for="">文章標題</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $post['title'];?>">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">文章內容</label>
                    <textarea name="content" id="" cols="30" rows="10" class="form-control"><?php echo $post['content'];?></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">文章分類</label>
                    <select name="category" id="" class="form-select">
                        <option value="科技" <?php echo $post['category'] == '科技' ? 'selected':'';?>>科技</option>
                        <option value="生活" <?php echo $post['category'] == '生活' ? 'selected':'';?>>生活</option>
                    </select>
                </div>
                <input type="hidden" value="<?php echo $post['id'];?>" name="id">
                <input type="submit" value="儲存文章" class="btn btn-success">
                <input type="button" value="取消" onclick="history.back()" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>

<?php
    include('../template/footer.php');
?>