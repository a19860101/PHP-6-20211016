<?php
    class Role {
        //屬性
        public $name;
        public $skill;
        private $damage = 0;
        protected $magic = 0;

        //方法
        function attack(){
            return $this->damage = 3;
        }
        function walk(){
            return $this->name.'walk';
        }
        function magicAttack(){
            return $this->magic = 50;
        }
    }
    class NPC extends Role {
        public $computer;
        function talk(){
            return 'I am NPC';
        }
        function NPCattack(){
            return $this->damage = 15;
        }

    }

    $user1 = new Role;
    // echo $user1->damage;
    // echo $user1->attack();
    // echo $user1->magicAttack();

    $com1 = new NPC;

    print_r($com1->magic);