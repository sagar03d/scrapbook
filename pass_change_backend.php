<?php
include('connection.php');
if(isset($_REQUEST['btn'])){
$id = $_SESSION['id'];
$old_pass = md5($_REQUEST['old_pass']);
$new_pass = md5($_REQUEST['new_pass']);
$confirm_pass = md5($_REQUEST['confirm_pass']);
$query = mysqli_query($connect,"SELECT password FROM user WHERE id='$id'");

if($query==false){
	echo mysqli_error($connect);
	die;
}
else{
	$row = mysqli_fetch_array($query);
	if($row['password']==$old_pass){
		if($new_pass==$confirm_pass){
			$query1 = mysqli_query($connect,"UPDATE user SET password='$new_pass'") or die('error');
			header("Location:profile.php");
		}
		else{
			echo "<script>alert('Your password did not match');</script>";
			//header("Location:pass_change.php");
		}
	}
	else{
		echo "<script>alert('You have entered wrong password');</script>";
		//header("Location:pass_change.php");
	}
}
}
?>