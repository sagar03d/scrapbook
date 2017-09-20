<?php
include("connection.php");
$id = $_REQUEST['id'];
$query = mysqli_query($connect,"DELETE FROM user WHERE id='$id'") or die(mysqli_error($query));
header("Location:admin-profile.php?id='$id'");
?>