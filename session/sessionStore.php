<?php
    session_start();
    $_SESSION['USER'] = $_REQUEST['user'];

    header('location:index.php');