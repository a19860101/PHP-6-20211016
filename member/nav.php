<nav>
    <div class="menu">
    <?php if(isset($_SESSION['AUTH'])){ ?>
        <span><?php echo $_SESSION['AUTH']['user']; ?>您好!</span>
        <a href="<?php echo $webroot.'logout.php'?>">登出</a>
        <a href="<?php echo $webroot.'work.php'?>">工作頁面</a>
    <?php } ?>
    
    <?php if(!isset($_SESSION['AUTH'])){?>
        <a href="login.php">登入</a>
        <a href="create.php">註冊</a>
    <?php } ?>
    </div>
</nav>