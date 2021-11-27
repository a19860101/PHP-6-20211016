<?php 
    include('../template/header.php');
    include('../template/nav.php');

    include('../category/Category.php');
    $categories = Category::all();
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 my-3">
            <h2>新增文章</h2>
            <hr>
        </div>
        <div class="col-10">
            <form action="store.php" method="post">
                <div class="mb-3">
                    <label class="form-label" for="">文章標題</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">文章內容</label>
                    <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">文章分類</label>
                    <select name="category" id="" class="form-select">
                        <?php foreach($categories as $category){ ?>
                            <option value="<?php echo $category['title'];?>"><?php echo $category['title'];?></option>
                        <?php } ?>
                    </select>
                </div>
                <input type="submit" value="新增文章" class="btn btn-primary">
                <input type="button" value="取消" class="btn btn-danger" onclick="history.back()">
            </form>
        </div>
    </div>
</div>

<?php
    include('../template/footer.php');
?>