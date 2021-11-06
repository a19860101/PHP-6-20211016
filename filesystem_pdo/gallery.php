<?php
    include('../pdo.php');
    $sql = 'SELECT * FROM galleries';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $imgs = $stmt->fetchAll();

    if(isset($_POST['delete'])){
        extract($_POST);
        $sqlDel = 'DELETE FROM galleries WHERE id = ?';
        $stmt = $pdo->prepare($sqlDel);
        unlink('images/'.$name);
        $stmt->execute([$id]);
        header('Location:gallery.php');

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
            max-width:1000px;
            margin: auto;
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
        <a href="list.php">列表</a>
        <a href="gallery.php">圖片</a>
    </div>
    <div class="container">

        <?php
        foreach($imgs as $img){
        ?>
        <div class="box">
            <img src="images/<?php echo $img['name'];?>" alt="">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $img['id'];?>">
                <input type="hidden" name="name" value="<?php echo $img['name']; ?>">
                <input type="submit" value="刪除" name="delete" onclick="return confirm('確認刪除?')">
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>