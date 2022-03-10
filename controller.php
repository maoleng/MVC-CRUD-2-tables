<?php
if ( isset($_GET['mon']) ) {
    $id_mon = $_GET['mon'];
    include 'model.php';
    include 'dish.php';
} else {
    include "menu.php";
}