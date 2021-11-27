<?php
    include('../template/header.php');
    include('../template/nav.php');
    include('Category.php');
    $categories = Category::all();
?>
<div class="container">
    <div class="row">
    <div class="col-12 my-3">
            <h2>分類管理</h2>
            <hr>
        </div>
        <div class="col-8">
            <h3>新增分類</h3>
            <form action="store.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">分類標題</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <input type="submit" value="新增" class="btn btn-primary">
            </form>
        </div>
        <div class="col-4">
            <h3>分類列表</h3>
            <ul class="list-group">
                <?php foreach($categories as $category){ ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $category['title']; ?>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $category['id'];?>">
                        <input type="submit" value="刪除" class="btn btn-danger btn-sm">
                    </form>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
<?php
    include('../template/footer.php');
?>