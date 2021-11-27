<?php
    include('Category.php');

    Category::delete($_REQUEST);

    header('location:index.php');