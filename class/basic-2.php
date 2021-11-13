<?php
    class Role {

        //建構子
        function __construct(){
            echo '開啟地圖';
        }


        //屬性
        public $name;
        public $skill;
        private $damage = 0;
        protected $magic = 10;

        //方法
        function attack(){
            return $this->damage;
        }
        function walk(){
            return $this->name.'walk';
        }
        function magicAttack(){
            return $this->magic;
        }
        //靜態方法
        static function up($name){
            return $name.'stand up!!';
        }
    }
    class NPC extends Role {
        public $computer;
        function talk(){
            return 'I am NPC';
        }
        function npcAttack(){
            return $this->damage;
        }
        function npcMagicAttack(){
            return $this->magic;
        }

    }

    // $user1 = new Role;
    // echo $user1->damage;
    // echo $user1->magic;
    // echo $user1->attack();
    // echo $user1->magicAttack();
    // $com1 = new NPC;
    // echo $com1->damage;
    // echo $com1->magic;
    // echo $com1->npcAttack();
    // echo $com1->npcMagicAttack();

    // echo Role::up('john');

    $user2 = new Role;
    $user3 = new Role;
    