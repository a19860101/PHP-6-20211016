<?php
    include('Auth.php');

    Auth::login($_REQUEST);

    header('refresh:0;url=../index.php');