<?php
    include('Auth.php');

    Auth::login($_REQUEST);

    header('location:../index.php');