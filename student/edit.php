<?php
    include('db.php');
    extract($_GET);

    //方法一
    // $sql = 'SELECT * FROM students WHERE id = '.$id;
    // $result = mysqli_query($db,$sql);
    // $student = mysqli_fetch_assoc($result);

    //方法二
    $sql = 'SELECT * FROM students WHERE id = ?';
    $stmt = $db->prepare($sql);
    $stmt->bind_param('i',$id);
    $stmt->execute();

    $result = $stmt->get_result();
    $student = $result->fetch_assoc();

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
    <form action="store.php" method="post">
        <div>
            <label for="">姓名</label>
            <input type="text" name="name" value="<?php echo $student['name'];?>">
        </div>
        <div>
            <label for="">電話</label>
            <input type="text" name="phone" value="<?php echo $student['phone'];?>">
        </div>
        <div>
            <label for="">Mail</label>
            <input type="text" name="mail" value="<?php echo $student['mail'];?>">
        </div>
        <div>
            <label for="">學歷</label>
            <!-- <select name="edu" id="">
                <option value="國小" <?php if($student['edu']=='國小'){echo 'selected';}?>>國小</option>
                <option value="國中" <?php if($student['edu']=='國中'){echo 'selected';}?>>國中</option>
                <option value="高中職" <?php if($student['edu']=='高中職'){echo 'selected';}?>>高中職</option>
                <option value="大專院校" <?php if($student['edu']=='大專院校'){echo 'selected';}?>>大專院校</option>
                <option value="研究所以上" <?php if($student['edu']=='研究所以上'){echo 'selected';}?>>研究所以上</option>
            </select> -->
            <select name="edu" id="">
                <option value="國小" <?php echo $student['edu'] == '國小' ? 'selected':'';?>>國小</option>
                <option value="國中" <?php echo $student['edu'] == '國中' ? 'selected':'';?>>國中</option>
                <option value="高中職" <?php echo $student['edu'] == '高中職' ? 'selected':'';?>>高中職</option>
                <option value="大專院校" <?php echo $student['edu'] == '大專院校' ? 'selected':'';?>>大專院校</option>
                <option value="研究所以上" <?php echo $student['edu'] == '研究所以上' ? 'selected':'';?>>研究所以上</option>
            </select>
        </div>
        <div>
            <label for="">性別</label>
            <input type="radio" name="gender" value="男">
            <label for="">男</label>
            <input type="radio" name="gender" value="女">
            <label for="">女</label>
        </div>
        <div>
            <label for="">專長</label>
            <input type="checkbox" name="skill[]" value="平面設計">
            <label for="">平面設計</label>
            <input type="checkbox" name="skill[]" value="網頁設計">
            <label for="">網頁設計</label>
            <input type="checkbox" name="skill[]" value="App開發">
            <label for="">App開發</label>
        </div>
        <input type="submit" value="送出">
        <!-- <input type="button" value="取消" onclick="history.back()"> -->
        <input type="button" value="取消" onclick="location.href='index.php'">
    </form>
</body>
</html>