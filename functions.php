<?php
function def()
{
    $y = 2;
    $func = function ($x) use($y){
        global $y;
        return $x + $y;
    };
    $y = 3;
    echo $func(5);
}

def();

function upper ($s){
    return strtoupper($s) ;
}

$arr = ['a', 'b', ' c'];

$new = array_map('upper',$arr);

var_dump($new);