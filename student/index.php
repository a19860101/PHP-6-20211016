<?php
    include('db.php');
    // include_once('db.php');
    // require('db.php');
    // require_once('db.php');

    $sql = 'SELECT * FROM students';
    // $result = mysqli_query($db,'SELECT * FROM students');
    $result = mysqli_query($db,$sql);
    
    // $data = array();
    
    // while($row = mysqli_fetch_assoc($result)){
    //     // echo $row['name'];
    //     $data[] = $row;
    // }

    // foreach($data as $student){
    //     echo $student['name'];
    // }

    $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
    // foreach($data as $student){
    //     echo $student['name'];
    // }
    // print_r($data);
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
        <?php foreach($data as $student){ ?>
            <tr>
                <td><?php echo $student['id']; ?></td>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['phone']; ?></td>
                <td><?php echo $student['mail']; ?></td>
                <td><?php echo $student['gender']; ?></td>
                <td><?php echo $student['edu']; ?></td>
                <td><?php echo $student['skill']; ?></td>
            </tr>
        <?php } ?> 
        <?php
            // foreach($data as $student){
            //     echo '<tr>';
            //     echo '<td>'.$student['id'].'</td>';
            //     echo '<td>'.$student['name'].'</td>';
            //     echo '<td>'.$student['phone'].'</td>';
            //     echo '<td>'.$student['mail'].'</td>';
            //     echo '<td>'.$student['gender'].'</td>';
            //     echo '<td>'.$student['edu'].'</td>';
            //     echo '<td>'.$student['skill'].'</td>';
            //     echo '</tr>';
            // }
        ?>
    </table>
</body>
</html>