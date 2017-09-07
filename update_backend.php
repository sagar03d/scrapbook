<?php
include('connection.php');
if(isset($_REQUEST['submit'])){
$id = $_SESSION['id'];
	//get values given by user
	$name = $_REQUEST['name2'];
	$email = $_REQUEST['email'];
	$birthday = $_REQUEST['birthday'];
	$city = $_REQUEST['city'];
	$skill = implode(",",$_REQUEST['sk']);
	$gender = implode($_REQUEST['gender']);
	$image = $_FILES['image']['name'];
	$new = time()."_".rand(0,99)."_".$image;
	$destination = "upload/".$new;
	$source = $_FILES['image']['tmp_name'];
	move_uploaded_file($source,$destination);
	$query2 = mysqli_query($connect,"UPDATE user SET name='$name', email='$email',birthday='$birthday',city='$city',skill='$skill',gender='$gender',image='$destination' WHERE id='$id'");
	if($query2==false){
		echo mysqli_error($connect);
		die;
	}
	else{
		$up = 1;
		header("Location:profile.php?up=$up");
	}
}
?>