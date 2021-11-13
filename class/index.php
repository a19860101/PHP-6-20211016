<?php
    include('Controller/Role.php');
    include('Controller/User.php');


    use Controller\Role\Attack;
    
    // $a = new Controller\Role\Attack;
    // echo $a->physical();

    // $b = new Controller\User\Attack;
    // echo $b->physical();

    $a = new Attack;
    echo $a->physical();

    $b = new Controller\User\Attack;
    echo $b->physical();