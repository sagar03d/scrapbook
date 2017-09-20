<?php
include('connection.php');
$id = $_SESSION['id'];
$q = mysqli_query($ob->connect,"UPDATE user SET online = 0 WHERE id='$id'") or die(mysqli_error($ob->connect));
unset($_SESSION['id']);
session_destroy();
header("Location:login.php");
?>