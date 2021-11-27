<?php
    include('../template/header.php');
    include('../template/nav.php');
?>
<div class="container">
    <div class="row">
    <div class="col-12 my-3">
            <h2>分類管理</h2>
            <hr>
        </div>
        <div class="col-8">
            <h3>新增分類</h3>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">分類標題</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <input type="submit" value="新增" class="btn btn-primary">
            </form>
        </div>
        <div class="col-4">
            <h3>分類列表</h3>
        </div>
    </div>
</div>
<?php
    include('../template/footer.php');
?>