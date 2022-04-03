<?php

$text='hello world'; //global variable

function textSomething(){
    global $text; //local variable
    $text='goodbye world';
}

echo $text.'<br>';

textSomething();
echo $text.'<br>';
echo $text.'<br>';