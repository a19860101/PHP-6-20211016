<?php
    if(isset($_POST['delete'])){
        echo $_POST['img'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center
        }
        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit,minmax(200px, 1fr));
        }
        .box {
            position: relative;
        }
        .box form {
            position: absolute;
            /* background-color: #f00; */
            bottom: 10px;
            right: 10px;
        }
    </style>
</head>
<body>
    <div>
        <a href="index.php">上傳圖片</a>
    </div>
    <div class="container">

        <?php
        $imgs = glob('images/*');
        // print_r($imgs);
        foreach($imgs as $img){
        ?>
        <div class="box">
            <img src="<?php echo $img;?>" alt="">
            <form action="" method="post">
                <input type="hidden" name="img" value="<?php echo $img; ?>">
                <input type="submit" value="刪除" name="delete" onclick="return confirm('確認刪除?')">
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>