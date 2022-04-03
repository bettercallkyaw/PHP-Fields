<?php

//Numeric array

//normal array
$fruits=array('apple','banana','orange');
echo '<pre>'.print_r($fruits,true).'</pre>'.'<br>';
echo $fruits[0].'<br>';

//add array
$fruits[]='mango';
echo '<pre>'.print_r($fruits,true).'</pre>'.'<hr>';

//index array
$users=['bob','john','william','jack'];
echo '<pre>'.print_r($users,true).'</pre>'.'<br>';

//array push
array_push($users,'ali');
echo '<pre>'.print_r($users,true).'</pre>'.'<br>';

//array pop
array_pop($users);
echo '<pre>'.print_r($users,true).'</pre>'.'<br>';

//array unshift
array_unshift($users,'ali');
echo '<pre>'.print_r($users,true).'</pre>'.'<br>';

//array shift
array_shift($users);
echo '<pre>'.print_r($users,true).'</pre>'.'<hr>';

//associative array
$ass_company=[
    'facebook'=>'social media',
    'google'=>'search engine',
    'apple'=>'phone'
];

echo '<pre>'.print_r($ass_company,true).'</pre>'.'<br>';
echo $ass_company['apple'].'<hr>';

//multidimensional array
$mul_array=[
    'yahoo'=>'search engine',
    'users'=>['john','bob','jack'],
    'hobbies'=>['hiking','paint','drawing'],
    'company'=>[
        'KFC'=>'kitchen',
        'huawei'=>'smart phone',
        'marvel'=>'movie'
    ]
];

echo '<pre>'.print_r($mul_array,true).'</pre>'.'<br>';
echo $mul_array['users'][0].'<br>';
echo $mul_array['hobbies'][2].'<br>';
echo $mul_array['company']['marvel'].'<hr>';

//array objects
$partners=['bob'=>'john','robet'=>'peter'];

$obj=(object)$partners;
var_dump($obj);
echo '<br>'.$obj->robet.'<br>';

//foreach loop array
foreach($partners as $key=>$value){
    echo 'key is '.$key.'.value is '.$value.'<br>';
}
echo '<hr>';

//serialize and unserialize array
$num_array=[
    ['one','two','three','four','five'],
    ['one','two','three','four','five'],
    ['one','two','three','four','five'],
    ['one','two','three','four','five'],
    ['one','two','three','four','five'],
];
$num_ser=serialize($num_array);
echo $num_ser.'<br>';

$num_unser=unserialize($num_ser);
print_r($num_unser);
echo '<hr>';

//array spread
$people=['bob smith',34,'bob@info.com'];
list($name,$age,$email)=$people;
echo $email.'<br>';

//PHP >= 7.1 
$member=['william smith',32,'william@gmail.com'];
[$name,$age,$email]=$member;
echo $name.'<br>';

//PHP >= 7.1 
$person=['name'=>'john doe','age'=>22,'email'=>'john@yahoo.com'];
['name'=>$name,'age'=>$age,'email'=>$email]=$person;
echo $age.'<hr>';

//PHP >= 5.6
$num1=[1,2,3,4];
$num2=[...$num1,5];
print_r($num2).'<hr>';

//array_splice
$members=['john','bob','jack'];
$results=array_splice($members,1,1);
//print_r($members);
print_r($results);
echo '<hr>';

//array_kyes & array_values
$user_arr=[
    'name'=>'john',
    'age'=>23,
    'email'=>'john@gmail.com'
];

$keys=array_keys($user_arr);
$vals=array_values($user_arr);
print_r($keys);
echo '<br>';
print_r($vals);
echo '<hr>';

//explode & implode
$text='lords of the ring';
$exp_text=explode(' ',$text);
print_r($exp_text);
echo '<br>';
$imp_text=implode(' ',$exp_text);
print_r($imp_text);