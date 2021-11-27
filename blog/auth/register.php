<?php
    include('../template/header.php');
    include('../template/nav.php');
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 my-3">
            <h2>會員註冊</h2>
            <hr>
        </div>
        <div class="col-8">
            <form action="store.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">帳號</label>
                    <input type="text" class="form-control" name="user">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">密碼</label>
                    <input type="password" class="form-control" name="pw">
                </div>
                <input type="submit" class="btn btn-primary" value="註冊會員">
            </form>
        </div>
    </div>
</div>
<?php
    include('../template/footer.php');
?>