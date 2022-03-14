<?php

$action = '';
if ( isset($_GET['action']) ) {
    $action = $_GET['action'];
}

switch ( $action ) {
    case '':
        require 'model/students.php';
        $query = students_select_all();
        require 'view/students/index.php';
        break;
    case 'create':
        require 'model/students.php';
        require 'view/students/create.php';
        break;
    case 'store':
        $name = $_POST['name'];
        require 'model/students.php';
        students_store($name);
        header('location:index.php?controller=students');
        break;
    case 'edit':
        $id = $_GET['id'];
        require 'model/students.php';
        $name = mysqli_fetch_array(students_edit($id))['name'];
        $class_id = mysqli_fetch_array(students_edit($id))['class_id'];
        require 'model/classes.php';
        $classes = classes_select_all();
        require 'view/students/edit.php';
        break;
    case 'update':
        $id = $_POST['id'];
        $name = $_POST['name'];
        $class_id = $_POST['class_id'];
        require 'model/students.php';
        students_update($id, $name, $class_id);
        header('location:index.php?controller=students');
        break;
    case 'delete':
        $id = $_GET['id'];
        require 'model/students.php';
        students_delete($id);
        header('location:index.php?controller=students');
        break;
    default:
        echo 'Action không hợp lệ';
}


