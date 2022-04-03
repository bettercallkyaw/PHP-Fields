<?php

function sayHello($name){
    echo 'Hello '.$name.'<br>';
}

sayHello('john smith');

function getSum($num1,$num2){
    $sum=$num1+$num2;
    echo $sum.'<br>';
}

getSum(4,4);

function getValue($num3,$num4){
    $total=$num3+$num4;
    return $total;
}

$value=getValue(5,5);
echo $value.'<br>';

function addResult($num5,$num6){
    $result=$num5+$num6;
    return $result;
}

$add=addResult(2,2);
$add=addResult($add,1);
echo $add;