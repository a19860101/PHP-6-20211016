<?php
    include('Category.php');

    Category::store($_REQUEST);

    header('location:index.php');