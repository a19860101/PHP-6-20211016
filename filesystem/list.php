<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width: 200px;
        }
    </style>
</head>
<body>
    <div>
        <a href="index.php">上傳圖片</a>
    </div>
    <?php
        $imgs = glob('images/*');
        // print_r($imgs);
        foreach($imgs as $img){
    ?>
    <img src="<?php echo $img;?>" alt="">
    <?php } ?>
</body>
</html>