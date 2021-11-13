<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="store.php" method="post">
        <div>
            <label for="">文章標題</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="">文章內容</label>
            <textarea name="content" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="">文章分類</label>
            <select name="category" id="">
                <option value="科技">科技</option>
                <option value="生活">生活</option>
            </select>
        </div>
        <input type="submit" value="新增文章">
    </form>
</body>
</html>