<?php
include('connection.php');
if(isset($_REQUEST['submit'])){
$name = $_REQUEST['name'];
$password = md5($_REQUEST['password']);
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
//store the values
$query = mysqli_query($connect,"INSERT INTO user(name,password,email,birthday,city,skill,gender,image,Status) VALUES('$name','$password','$email','$birthday','$city','$skill','$gender','$destination',0)");
if($query==false){
	echo mysqli_error($connect);
	die;
}
else{
	header("Location:login.php");
}
}
?>