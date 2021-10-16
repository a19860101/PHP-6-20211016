<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        $_POST 表單變數
        $_GET URL變數
     -->
    <form action="form_reply.php" method="post">
        <fieldset>
            <legend>POST</legend>
            <div>
                <label for="">姓名</label>
                <input type="text" name="fullname">
            </div>
            <div>
                <label for="">電話</label>
                <input type="text" name="phone">
            </div>
            <input type="submit" value="送出">
        </fieldset>
    </form>
    <form action="form_reply.php" method="get">
        <fieldset>
            <legend>GET</legend>
            <div>
                <label for="">姓名</label>
                <input type="text" name="fullname">
            </div>
            <div>
                <label for="">電話</label>
                <input type="text" name="phone">
            </div>
            <input type="submit" value="送出">
        </fieldset>

    </form>
</body>
</html>