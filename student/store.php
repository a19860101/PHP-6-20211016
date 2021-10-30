<?php
    // $student = $_POST;
    // print_r($student);

    // echo $_POST["name"];
    // echo "<br>";
    // echo $_POST["phone"];
    // echo "<br>";
    // echo $_POST["mail"];

    // extract($_POST);
    // echo $name;
    // echo "<br>";
    // echo $phone;
    // echo "<br>";
    // echo $mail;
    // echo "<br>";
    // echo $edu;
    // echo "<br>";
    // echo $gender;
    // echo "<br>";
    // // print_r($skill);
    // echo implode(",",$skill);

    //方法一
    // include('db.php');
    // extract($_POST);

    // $skill = implode(',',$skill);
    // $sql = "INSERT INTO students(name,mail,phone,edu,gender,skill)
    //         VALUES('$name','$mail','$phone','$edu','$gender','$skill')";
    // mysqli_query($db,$sql);



    //方法二
    include('db.php');
    extract($_POST);
    $skill = implode(',',$skill);
    // $sql = "INSERT INTO students(name,mail,phone,edu,gender,skill)
    //         VALUES('$name','$mail','$phone','$edu','$gender','$skill')";
    // $db->query($sql);

    $sql = "INSERT INTO students(name,mail,phone,edu,gender,skill)VALUES(?,?,?,?,?,?)";
    //預備陳述式
    $stmt = $db->prepare($sql);
    $stmt->bind_param('ssssss',$name,$mail,$phone,$edu,$gender,$skill);
    $stmt->execute();

    // header('location:index.php');
    // echo '三秒後跳轉';
    echo '<script>alert("學員資料新增成功")</script>';
    header('refresh:0;url=index.php');
