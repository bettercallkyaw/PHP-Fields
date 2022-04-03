<?php 

//data types
$fullName='john doe'; //string
$age=33; //int
$price=4.4; //float
$isMarried=true; //bool

echo 'hello i am '.$fullName.'.I am '.$age.' year old.'.'<br>';

//constant variable
$fruit='apple';
$fruit='mango';
echo $fruit.'<br>';

define('COLOR','green');
define('color','blue'); //not work
echo COLOR;