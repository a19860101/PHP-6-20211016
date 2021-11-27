<?php
    include('Post.php');

    Post::delete($_REQUEST);

    header('location:index.php');