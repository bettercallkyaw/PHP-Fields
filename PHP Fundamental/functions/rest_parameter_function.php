<?php

function add($a,...$b){
    print_r($b);
}

add(1,2,3,4);

//php >=8.0
// function price(int|float $n){
//     return "price is \$$n";
// }

// echo price(3.1);
// echo price(3);

//php>=7.4
$two=fn($n)=>$n*2;
echo '<br>'.$two(4);

//php >=8.0
// function profile($name,$email,$age){
//     echo "$name ($age) @ $email";
// }

// profile(age: 34,name: "bob",email: "bob@gmail.com");

//php >=7.3
// profile(
//     age:23,
//     name:'bob',
//     email:'bob@gmail.com'
// );