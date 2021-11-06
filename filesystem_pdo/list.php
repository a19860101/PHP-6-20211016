<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th {
            border: 1px solid #999;
            padding: 10px;
        }
        table {
            border-collapse: collapse;
        }
        form {
            display: inline-block;
        }
    </style>
</head>
<body>
    <div>
        <a href="index.php">上傳圖片</a>
        <a href="list.php">列表</a>
        <a href="gallery.php">圖片</a>
    </div>
    <table>
        <tr>
            <th>檔案名稱</th>
            <th>動作</th>
        </tr>
   
        <?php
        $imgs = glob('images/*');
        // print_r($imgs);
        foreach($imgs as $img){
        ?>
        <tr>
            <td><?php echo $img; ?></td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="img" value="<?php echo $img; ?>">
                    <input type="submit" value="刪除" name="delete" onclick="return confirm('確認刪除?')">
                </form>
                <a href="<?php echo $img;?>">下載</a>
            </td>
        </tr>
        <?php } ?>
    </table>
        
</body>
</html>