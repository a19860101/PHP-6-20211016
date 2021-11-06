<?php
    session_start();
    // $_SESSION['USER'] = $_REQUEST['user'];
    $_SESSION['AUTH'] = $_REQUEST;

    // print_r($_SESSION['AUTH']);
    header('location:index.php');