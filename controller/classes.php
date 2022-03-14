<?php

$action = '';
if ( isset($_GET['action']) ) {
    $action = $_GET['action'];
}

switch ( $action ) {
    case '':
        require 'model/classes.php';
        $query = classes_select_all();
        require 'view/classes/index.php';
        break;
    case 'create':
        require 'model/classes.php';
        require 'view/classes/create.php';
        break;
    case 'store':
        $name = $_POST['name'];
        require 'model/classes.php';
        classes_store($name);
        header('location:index.php?controller=classes');
        break;
    case 'edit':
        $id = $_GET['id'];
        require 'model/classes.php';
        $name = classes_edit($id);
        require 'view/classes/edit.php';
        break;
    case 'update':
        $id = $_POST['id'];
        $name = $_POST['name'];
        require 'model/classes.php';
        classes_update($id, $name);
        header('location:index.php?controller=classes');
        break;
    case 'delete':
        $id = $_GET['id'];
        require 'model/classes.php';
        classes_delete($id);
        header('location:index.php?controller=classes');
        break;
    default:
        echo 'Action không hợp lệ';
}


