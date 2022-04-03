<?php

//Arithmetic operators
$a=33;
$b=22;
echo $a+$b.'<br>';

$c=55;
$d=5;
echo $c-$d.'<br>';

$e=50;
$f=10;
echo $e*$f.'<br>';

$g=40;
$h=10;
echo $g/$h.'<br>';

$i=60;
$j=6;
echo $i%$j.'<hr>';

//Assignment operators
$x=50;
echo $x.'<br>';

$x+=2;
echo $x.'<br>';

$x-=2;
echo $x.'<br>';

$x*=2;
echo $x.'<br>';

$x/=2;
echo $x.'<br>';

$x%=2;
echo $x.'<hr>';

//Comparsion Operators
var_dump(1==1); //true
echo '<br>';
var_dump(1=='1');//true
echo '<br>';
var_dump(1==='1');//false (=== Identical)
echo '<br>';
var_dump(1!==4);//true
echo '<br>';
var_dump(1>2); //false
echo '<br>';
var_dump(1<2);//true
echo '<br>';
var_dump(1>=2);//false
echo '<br>';
var_dump(1<=2);//true
echo '<hr>';

//Increment And Decrement operators
//increment
$y=4;
echo $y.'<br>';

$y+=1;
echo $y.'<br>';

$y++;
echo $y.'<br>';

++$y;
echo $y.'<br>';

//decrement
$z=5;
echo $z . '<br>';

$z -= 1;
echo $z . '<br>';

$z--;
echo $z . '<br>';

--$z;
echo $z . '<br>';


//logical operators
var_dump(false and true);//false
echo '<br>';
var_dump(false and false); //false
echo '<br>';
var_dump(true and true); //true
echo '<br>';
var_dump(true and false); //false
echo '<br>';
var_dump(false or true); //true
echo '<br>';
var_dump(false or false); //false
echo '<br>';
var_dump(true or true); //true
echo '<br>';
var_dump(true or false); //true
echo '<hr>';


//string operators
$text='Hello';
echo $text.'<br>';

$new_text=$text . 'World'; //now $new_text contains 'Hello World'
echo $new_text.'<br>';

$text='GoodBye'; //now $text contains 'Goodbye World'
$text .= 'World';
echo $text.'<hr>';

//ternary operators
$success=true;

if(isset($success)){
    echo 'suceess'.'<br>';
}else{
    echo 'fail';
}

$result=isset($success)?'success':'fail';
echo $result.'<hr>';



//null coalescing operators
$success='Success';

$result=isset($success)?'Success':'Fail';
echo $result.'<br>';

$result=$success??'Fail'; //php-7 
echo $result.'<hr>';

//spaceship operator
//php>=7.0

echo 3<=>5; //-1
echo 5<=>5; //0
echo 5<=>3; //1

$price=3;
$value=5;

echo $price<$value or $price===3; //(true)
echo $price<$value xor $price===3; //(false)