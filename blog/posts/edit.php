<?php
    include('Post.php');
    $post = Post::edit($_REQUEST);
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
    <form action="update.php" method="post">
        <div>
            <label for="">文章標題</label>
            <input type="text" name="title" value="<?php echo $post['title'];?>">
        </div>
        <div>
            <label for="">文章內容</label>
            <textarea name="content" id="" cols="30" rows="10"><?php echo $post['content'];?></textarea>
        </div>
        <div>
            <label for="">文章分類</label>
            <select name="category" id="">
                <option value="科技" <?php echo $post['category'] == '科技' ? 'selected':'';?>>科技</option>
                <option value="生活" <?php echo $post['category'] == '生活' ? 'selected':'';?>>生活</option>
            </select>
        </div>
        <input type="hidden" value="<?php echo $post['id'];?>" name="id">
        <input type="submit" value="儲存文章">
        <input type="button" value="取消" onclick="history.back()">
    </form>
</body>
</html>