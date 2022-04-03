<?php
/**
 * Note
 * -There is no alternative-syntax or template syntax for a do-while-loop.
 */

$hobbies=['hiking','books_collection','paint'];
# for loop (with curly braces)
for($i=0;$i<count($hobbies);$i++){
    echo $hobbies[$i].'<br>';
}
echo '<hr>';

# for loop (without curly brackets)
for($i=0;$i<count($hobbies);$i++):
    echo $hobbies[$i].'<br>';
endfor;
echo '<hr>';    

#while loop(with curly brackets)
$i=0;
while ($i<count($hobbies)) {
    echo $hobbies[$i].'<br>';
    $i++;
}
echo '<hr>';

#while loop(without curly brackets)
$i=0;
while($i<count($hobbies)):
    echo $hobbies[$i].'<br>';
    $i++;
endwhile;    
echo '<hr>';

#foreach loop(with curly brackets)
foreach($hobbies as $hobby){
    echo $hobby.'<br>';
}
echo '<hr>';

#foreach loop(without curly brackets)
foreach($hobbies as $hobby):
    echo $hobby.'<br>';
endforeach;
echo '<hr>';

//do while loop
$i=0;
do {
    echo $hobbies[$i].'<br>';
    $i++;
} while ($i<count($hobbies));