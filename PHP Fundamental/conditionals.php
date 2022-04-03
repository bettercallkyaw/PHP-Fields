<?php 

$fruit='apple';
//if(with curly brackets)
if($fruit=='apple'){
    echo 'This is an apple.'.'<br>';
}

//if(without curly brnckets)
if($fruit=='apple'):
    echo 'This is an apple.'.'<br>';
endif;      

//if/else(with curly brackets)
if($fruit=='apple'){
    echo 'This is an apple.'.'<br>';
}else{
    echo 'This is not an apple.';
}

//if/else(without curly brackets)
if($fruit=='apple'):
    echo 'This is an apple.'.'<br>';
else:
    echo 'This is not an apple.';
endif;        

//if/elseif/else(with curly brackets)
if($fruit=='apple'){
    echo 'This is an apple.'.'<br>';
}elseif($fruit=='orange'){
    echo 'This is an orange.';
}else{
    echo 'This is not an apple and orange.';
}

//if/elseif/else(without curly brackets)
if($fruit=='apple'):
    echo 'This is an apple.'.'<br>';
elseif($fruit=='orange'):
    echo 'This is an orange.';
else:
    echo 'This is not an apple and orange.';
endif;        

//switch(with curly brackets)
switch($fruit){
    case 'apple':
        echo 'This is an apple.'.'<br>';
        break;
    case 'orange':
        echo 'This is an orange.';
        break;
    default:
        echo 'This is not an apple and orange.';        
}

//switch(without curly brackets)
switch($fruit):
    case 'apple':
        echo 'This is an apple.'.'<br>';
        break;
    case 'orange':
        echo 'This is an orange.';
        break;
    default:
        echo 'This is not an apple and orange.';
endswitch; 

//php >=8.0
//match loop

// $day=date('D');
// $result=match($day){
//     'Sat','Sun'=>'Weekend',
//     'Fri'=>'TGIF',
//     default=>'Weekday'
// };

// echo $result;