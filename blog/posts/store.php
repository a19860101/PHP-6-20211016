<?php
    include('../pdo.php');
    include('Post.php');


    $post = new Post;
    $post->store($_REQUEST);

    header('location:../index.php');