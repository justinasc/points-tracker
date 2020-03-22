<?php
// Start session
session_start();

// Config File
require_once 'config.php';

// Auto load classes
function __autoload($class_name){
    require_once 'class/'.$class_name.'.php';
}
