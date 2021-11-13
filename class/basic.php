<?php

    class Role {
        public $name;
        public $category;
        public $skill = [];

        //方法
        function attack(){
            echo 'attack';
        }

    }

    $user_1 = new Role;
    $user_1 -> name = '阿卡莉';
    $user_1 -> category = '刺客';
    $user_1 -> skill = ['無暇追擊','落擲苦無','暮光朦影','離群手裡劍','刺客印記'];

    // print_r($user_1);

    $user_1->attack();
