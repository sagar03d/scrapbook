<?php
	session_start();
	$server = "localhost";
	$user = "root";
	$password = "toor";
	$dbName = "scrapbook";
	$connect = mysqli_connect($server,$user,$password,$dbName) or die(mysqli_error($connect));
?>