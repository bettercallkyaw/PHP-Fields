<?php

$numbers=['one','two','three','four','five','six','seven'];
echo '<pre>'.print_r($numbers,true).'</pre>'.'<hr>';

unset($numbers[0]);
echo '<pre>'.print_r($numbers,true).'</pre>'.'<hr>';

unset($numbers[1]);
echo '<pre>'.print_r($numbers,true).'</pre>'.'<hr>';

unset($numbers[2]);
echo '<pre>'.print_r($numbers,true).'</pre>'.'<hr>';

$arr_set=array_values($numbers);
echo '<pre>'.print_r($arr_set,true).'</pre>';