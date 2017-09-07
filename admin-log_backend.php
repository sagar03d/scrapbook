<?php
include('connection.php');
if(isset($_REQUEST['btn'])){
$email_given = $_REQUEST['email'];
$password_given = md5($_REQUEST['password']);
$query = mysqli_query($connect,"SELECT id,email,password FROM admin WHERE email='$email_given'") or die(mysqli_error($query));
$row = mysqli_fetch_array($query);
$id=$row['id'];
if(mysqli_num_rows($query)<1){
	echo "<script>showadmin()</script>";
}
else{
$email = $row['email'];
$password = $row['password'];
if($email_given==$email && $password_given==$password){
	//$_SESSION['adminid']=$id;
	header("Location:admin-profile.php?id='$id");
}
else{
	echo "<script>showadmin2()</script>";
}
}
}
?>