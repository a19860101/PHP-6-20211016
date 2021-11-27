<?php
    $webroot = 'http://localhost/php-6-20211016/blog/';
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $webroot; ?>">QWERTY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $webroot; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $webroot; ?>posts/create.php">新增文章</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="<?php echo $webroot; ?>auth/login.php" class="nav-link">登入</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $webroot; ?>auth/register.php" class="nav-link">註冊</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">登出</a>
                </li>
            </ul>
        </div>
    </div>
</nav>