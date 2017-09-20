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
$query = $ob->insert($name,$password,$email,$birthday,$city,$skill,$gender,$destination);
if($query==false){
	echo mysqli_error($ob->connect);
	die;
}
else{
	header("Location:login.php");
}
}
?>