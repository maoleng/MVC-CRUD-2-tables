<?php

$controller = '';
if ( isset($_GET['controller']) ) {
    $controller = $_GET['controller'];
}

switch ( $controller ) {
    case '':
        require 'controller/controller.php';
        break;
    case 'students':
        require 'controller/students.php';
        break;
    case 'classes':
        require 'controller/classes.php';
        break;


    default:
        echo 'Sai controller';
}
