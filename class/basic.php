<?php

    class Role {
        //屬性
        public $name;
        public $skill;


        //方法
        function attack(){
            echo 'attack';
        }
        function walk(){
            return $this->name.'walk';
        }
    }

    // 權限  public, protected, private

    // $user_1 = new Role;
    // $user_1 -> name = '阿卡莉';
    // $user_1 -> category = '刺客';
    // $user_1 -> skill = ['無暇追擊','落擲苦無','暮光朦影','離群手裡劍','刺客印記'];

    // // print_r($user_1);

    // $user_1->attack();

    // echo $user_1->walk();

    class NPC extends Role {
        public $computer = true;
        public $hp = 100;
    
        function talk(){
            return 'I am NPC';
        }
    }

    $npc_1 = new NPC;
    $npc_1->name = 'John';
    $npc_1->skill = '物理攻擊';

    // print_r($npc_1);

    echo $npc_1->walk();

