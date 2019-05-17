<?php
    class Cat{
//        function obj($name,$age){
//            $this->name = $name;
//            $this->age = $age;
//        }
//        function code(){
//            echo $this->name . $this->age . 'coding...';
//        }
//    }
//
//    $cat1 = new Cat();
//    $cat1 -> obj('mt','1');
//    $cat1 -> code();
//    $cat2 = new Cat();
//    $cat2 -> obj('hl','2');
//    $cat2 -> code();

//PHP 构造函数
        function  __construct($name,$age){
            $this->name = $name;
            $this->age = $age;
        }

        function code(){
            echo $this->name . $this->age . 'coding...';
        }
    }

    $cat1 = new Cat('mt','1');
    $cat1 -> code();
    $cat2 = new Cat('hl','2');
    $cat2 -> code();

