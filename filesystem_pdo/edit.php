<?php
    include('../pdo.php');
    extract($_REQUEST);
    
    $sql = 'SELECT * FROM galleries WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    $img = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <div>
            <label for="">圖片名稱</label>
            <input type="text" name="title" value="<?php echo $img["title"]; ?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $img['id'];?>">
        <input type="submit" value="修改名稱">

    </form>
</body>
</html>