<?php
    $_POST['number'];

    echo even_odd($_POST['number']);

    function is_odd($number){
        if($number%2==0){
            return false;
        }
        else{
            return true;
        }
    }

    function even_odd($number){
        if($number%2==0){
            return "Even Number";
        }
        else{
            return "Odd Number";
        }
    }
