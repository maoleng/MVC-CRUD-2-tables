<?php

$connect = mysqli_connect('localhost', 'root', '', '_mvc');
$sql = "SELECT * FROM mon_an WHERE id = '$id_mon'";
$query = mysqli_query($connect, $sql);
$each = mysqli_fetch_array($query);