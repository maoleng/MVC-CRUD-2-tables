<?php

$action = '';
if ( isset($_GET['action']) ) {
    $action = $_GET['action'];
}

switch ($action) {
    case '':
        require 'model.php';
        // Nhúng file view/index.php vào để hiển thị ra tất cả sinh viên
        require 'view/index.php';
        break;
    case 'create':
        require 'view/create.php';
        break;
    case 'store':
        require 'model.php';
        break;
    case 'edit':
        $id = $_GET['id'];
        require 'model.php';
        require 'view/edit.php';
        break;
    case 'update':
        require 'model.php';
        break;
    case 'delete':
        $id = $_GET['id'];
        require 'model.php';
        break;
    default:
        echo 'Nhập linh tinh gì thế';

}

