<?php

function classes_select_all() {
    require 'model/connect.php';
    $sql = "SELECT * from classes";
    $query = mysqli_query($connect, $sql);
    return $query;
}

function classes_store($name) {
    require 'model/connect.php';
    $sql = "INSERT INTO classes(name) VALUES ('$name')";
    mysqli_query($connect, $sql);
}

function classes_edit($id) {
    require 'model/connect.php';
    $sql = "select * from classes where id = '$id'";
    $query = mysqli_query($connect, $sql);
    $name = mysqli_fetch_array($query)['name'];
    return $name;
}

function classes_update($id, $name) {
    require 'model/connect.php';
    $sql = "update classes set name = '$name' where id = '$id'";
    mysqli_query($connect, $sql);
}

function classes_delete($id) {
    require 'model/connect.php';
    $sql = "delete from classes where id = '$id'";
    mysqli_query($connect, $sql);
}
