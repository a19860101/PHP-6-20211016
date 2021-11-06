<?php
    session_start();
    $_SESSION['TEST'] = $_REQUEST;

    header('location:index.php');