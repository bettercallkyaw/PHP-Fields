<?php

$nums=[33,44,1,2334,4556,222222];

echo '<pre>'.print_r($nums,true).'</pre>'.'<br>';
echo min($nums).'<br>';
echo max($nums).'<br>';

sort($nums);
echo '<pre>'.print_r($nums,true).'</pre>'.'<br>';

$text='hello world';
echo strlen($text).'<br>';

$ary_text=['hello world','nice to meet you','how dare you'];
$found=in_array($text,$ary_text);

if($found){
    echo 'found';
}else{
    echo 'not found';
}