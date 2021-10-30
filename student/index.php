<?php
    include('db.php');
    // include_once('db.php');
    // require('db.php');
    // require_once('db.php');

    $sql = 'SELECT * FROM students';
    // $result = mysqli_query($db,'SELECT * FROM students');
    $result = mysqli_query($db,$sql);
    
    $data = array();
    
    while($row = mysqli_fetch_assoc($result)){
        // echo $row['name'];
        $data[] = $row;
    }

    foreach($data as $student){
        echo $student['name'];
    }
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
    <h1>學員資料</h1>
</body>
</html>