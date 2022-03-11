<?php

$connect = mysqli_connect('localhost','root', '', '_mvc');
mysqli_set_charset($connect, 'utf8');

switch ($action) {
    case '':
        $sql_select_student = "select * from students";
        $query = mysqli_query($connect, $sql_select_student);
        break;
    case 'store':
        $name = $_POST['name'];
        $sql_insert_student = "insert into students(name) values('$name')";
        mysqli_query($connect, $sql_insert_student);
        header('location:index.php');
        break;
    case 'edit':
        $sql_select_student = "select * from students where id = '$id'";
        $query = mysqli_query($connect, $sql_select_student);
        $result = mysqli_fetch_array($query);
        break;
    case 'update':
        $id = $_POST['id'];
        $name = $_POST['name'];
        $sql_update_student = "update students set name = '$name' where id = '$id' ";
        mysqli_query($connect, $sql_update_student);
        header('location:index.php');
        break;
    case 'delete':
        $sql_delete_student = "delete from students where id = '$id' ";
        mysqli_query($connect, $sql_delete_student);
        header('location:index.php');
        break;
    default:
        echo 'Nhập linh tinh gì thế';
}
