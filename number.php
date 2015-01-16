<?php
    function myTest(){
        $num=2+3;
        echo "Hello";
        return "bkict";
    }
    var_dump(is_null(myTest()));
    myTest();
    echo myTest()."<br>";

    function myTest2(){
        return "Hello";
    }

    myTest2();
    echo myTest2();