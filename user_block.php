<?php
include('connection.php');
$id = $_GET['id'];
$query = mysqli_query($connect,"UPDATE user SET Status = CASE WHEN Status = '0' THEN '1' ELSE 0 END WHERE id='$id'") or die(mysqli_error($connect));
header('Location:admin-profile.php');
?>