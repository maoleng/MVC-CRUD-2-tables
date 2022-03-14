<?php

function students_select_all() {
    require 'model/connect.php';
    $sql = "SELECT students.*, classes.name as 'class_name' FROM students left JOIN classes ON students.class_id = classes.id";
    $query = mysqli_query($connect, $sql);
    return $query;
}

function students_store($name) {
    require 'model/connect.php';
    $sql = "INSERT INTO students(name) VALUES ('$name')";
    mysqli_query($connect, $sql);
}

function students_edit($id) {
    require 'model/connect.php';
    $sql = "select * from students where id = '$id'";
    $query = mysqli_query($connect, $sql);
    return $query;
}

function students_update($id, $name, $class_id) {
    require 'model/connect.php';
    $sql = "update students set name = '$name', class_id = '$class_id' where id = '$id'";
    mysqli_query($connect, $sql);
}

function students_delete($id) {
    require 'model/connect.php';
    $sql = "delete from students where id = '$id'";
    mysqli_query($connect, $sql);
}
