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
    include('db.php');
    extract($_POST);

    $skill = implode(',',$skill);
    $sql = "INSERT INTO students(name,mail,phone,edu,gender,skill)
            VALUES('$name','$mail','$phone','$edu','$gender','$skill')";
    mysqli_query($db,$sql);

    header('location:index.php');
