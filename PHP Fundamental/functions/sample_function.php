<?php

function init(){
    sayHello();
    addNum();
}

function sayHello(){
    echo 'hello world'.'<br>';
}

function addNum(){
    echo 5+5;
}

init();