<?php

session_start();

// unset($_SESSION['name']);
// unset($_SESSION['age']);

session_destroy();
print_r($_SESSION);