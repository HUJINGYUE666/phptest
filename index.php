<?php
    echo  'hello world'; //http://localhost/phptest/index.php

    echo strpos("hello world", "world"); //6

    $arr=array("1","2","3");
    echo $arr[0] . ", " . $arr[1] . "," . $arr[2]; //1,2,3

    $arr=array(
        "mt"=>"1",
        "hl"=>"2",
        "ph"=>"3"
    );
    echo $arr['mt']; //1


    $arr = array("1", "2", "3");
    for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i]; //1 2 3
        echo '<br>';
    }

    $arr=array(
        "mt"=>"1",
        "hl"=>"2",
        "ph"=>"3"
    );

    foreach($arr as $val){
        echo $val; //1 2 3
        echo '<br>';
    }

    foreach($arr as $key => $val){
        echo $key . ',' . $val; //mt,1 hl,2 ph,3
        echo '<br>';
    }

    function add($x,$y){
        $total=$x+$y;
        return $total; //局部变量 return调出
    }
    echo add(1,2); //3