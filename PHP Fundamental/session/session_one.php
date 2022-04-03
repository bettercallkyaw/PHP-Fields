<?php

session_start();

$_SESSION['name']='john smith';
$_SESSION['age']=34;

print_r($_SESSION);
echo '<br>'.$_SESSION['name'];