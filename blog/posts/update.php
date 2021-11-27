<?php
    include('Post.php');

    Post::update($_REQUEST);

    header('location:index.php');