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
        header('Location:list.php');

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
            <th>#</th>
            <th>圖片名稱</th>
            <th>檔名</th>
            <th>動作</th>
        </tr>
   
        <?php
        foreach($imgs as $img){
        ?>
        <tr>
            <td><?php echo $img['id'];?></td>
            <td><?php echo $img['title']; ?></td>
            <td><?php echo $img['name']; ?></td>
            <td>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $img['id'];?>">
                <input type="hidden" name="name" value="<?php echo $img['name']; ?>">
                <input type="submit" value="刪除" name="delete" onclick="return confirm('確認刪除?')">
            </form>
                <a href="images/<?php echo $img['name'];?>" target="_blank">下載</a>
                <a href="edit.php?id=<?php echo $img['id'];?>">編輯</a>

            </td>
        </tr>
        <?php } ?>
    </table>
        
</body>
</html>