<?php
include('connection.php');

if(isset($_SESSION['cont'])==1){
	header("Location:profile.php");
}
if(isset($_REQUEST['btn'])){
$email = $_REQUEST['email'];
$password = md5($_REQUEST['password']);


//check if those credentials are valid or not
/*if(isset($_REQUEST['remember'])=='on'){
	$_SESSION['cont']=1;
	setcookie("email",$email,time()+3600);
	setcookie("password",$password,time()+3600);
}*/


unset($_SESSION['cont']);
$query1 = mysqli_query($ob->connect,"SELECT * FROM user WHERE email='$email'");
if($query1==false){
	echo mysqli_error($ob->connect);
	die;
}
else{
	$num = $ob->numberOfrows($query1);
if($num == 0){
	//echo"Please Sign Up First";
	echo "<script>show();</script>";
	die;
}
else{
	$row = mysqli_fetch_array($query1);
	$status = $row['Status'];
	$result = $ob->authentication_check($email,$password);
	if($result == 'Valid'){
		if($status==1){
			echo "<script>block()</script>";
		}
		else{
		$_SESSION['id'] = $row['id'];
		$on = $row['id'];
		header("Location:profile.php?on=$on");
	}
}
	else{
		echo "<script>show2();</script>";
	}
}
}
}
?>