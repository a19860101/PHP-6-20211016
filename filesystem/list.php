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
        </div>
        <?php } ?>
    </div>
</body>
</html>