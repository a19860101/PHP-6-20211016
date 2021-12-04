<?php
    include('Post.php');


    // $post = new Post;
    // $post->store($_REQUEST);

    Post::store($_REQUEST,$_FILES);

    header('location:../index.php');