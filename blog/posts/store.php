<?php
    include('Post.php');


    // $post = new Post;
    // $post->store($_REQUEST);

    Post::store($_REQUEST);

    header('location:../index.php');