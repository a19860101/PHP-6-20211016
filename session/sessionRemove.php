<?php
    session_start();

    unset($_SESSION['AUTH']);
    // session_destroy();

    header('location:index.php');