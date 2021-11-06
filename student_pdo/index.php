<?php
    include('pdo.php');

    $sql = 'SELECT * FROM students';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $students = $stmt->fetchAll();

    // $result = $pdo->query($sql);
    // $students = $result->fetchAll();

    // $students = $pdo->query($sql)->fetchAll();

    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(); 
    // $students = array();
    // while($row = $stmt->fetch()){
    //     $students[] = $row;
    // }
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
            border: 1px solid #aaa;
            padding: 10px;
        }
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>學員資料</h1>
    <a href="create.php">新增學員資料</a>
    <table>
        <tr>
            <th>#</th>
            <th>姓名</th>
            <th>電話</th>
            <th>mail</th>
            <th>性別</th>
            <th>學歷</th>
            <th>專長</th>
        </tr>
        <?php foreach($students as $student){ ?>
            <tr>
                <td><?php echo $student['id']; ?></td>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['phone']; ?></td>
                <td><?php echo $student['mail']; ?></td>
                <td><?php echo $student['gender']; ?></td>
                <td><?php echo $student['edu']; ?></td>
                <td><?php echo $student['skill']; ?></td>
                <td colspan='2'>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
                        <input type="submit" value="刪除" onclick="return confirm('確認刪除?')">
                    </form>
                </td>
                <td>
                    <a href="edit.php?id=<?php echo $student['id']; ?>">編輯資料</a>
                </td>
            </tr>
        <?php } ?> 
    </table>
</body>
</html>