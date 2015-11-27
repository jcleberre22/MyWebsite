<?php
include_once 'tools/list_folder.php';

// OCOnnection to the MySQL DataBase


// include controller if it exist
if (! empty ( $_GET ['page'] ) && is_file ( 'Controller/' . $_GET ['page'] . '_ctl.php' )) {
	$page=$_GET['page'];
	include 'Controller/' . $_GET ['page'] . '_ctl.php';
} else {
	header('location: index.php?page=welcome');
}

?>
