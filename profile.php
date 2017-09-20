<?php
include('connection.php');
$id = $_SESSION['id'];
$query = mysqli_query($ob->connect,"SELECT * FROM `user` WHERE id='$id'");
if($query== false){
	echo mysqli_error($ob->connect);
}
else{
	$row = mysqli_fetch_array($query);
}
?>
<!DOCTYPE html>
<html>
<head>	
<link rel="stylesheet" type="text/css" href="style.css">
	<title>Profile Page</title>
</head>
<body>

<ul>
	<li><a href="logout.php">Logout</a></li>
	<li><a href="pass_change.php">Password Change</a></li>
	<li><a href="update.php">Update Profile</a></li>
</ul><br><br><br>
<center>
<img src="<?php echo $row['image']?>" height='10%' width='10%'>
<br><h3><?php echo "Name: ".$row['name']?></h3><br>
<p><?php echo $row['id']?></p>
<p><?php echo $row['email']?></p>
<p><?php echo $row['birthday']?></p>
<p><?php echo $row['city']?></p>
<p><?php echo $row['skill']?></p>
<p><?php echo $row['gender']?></p>
</center>
<?php 
if(isset($_GET['on'])){
	$on=$_GET['on'];
	$q = mysqli_query($ob->connect,"UPDATE user SET online = 1 WHERE id='$on'") or die(mysqli_error($connect));
}
$user_on = mysqli_query($ob->connect,"SELECT online FROM user") or die(mysqli_error($connect));
$a=0;
while($online=mysqli_fetch_array($user_on)){
	$b = $online['online'];
	$a = $a+$b;
}
if($a < 2){
	echo "<center><div id='line'>$a User is now online</div></center>";
}
else{
echo "<center><div id='line'>$a Users are now online</div></center>";
}
if(isset($_GET['up'])){
	$up = $_GET['up'];
	if($up == 1){
		echo "<center><b><br>Updated Successfully</b></center>";
	}
}
?>
</body>
</html>
<center>
</center>
<style>
ul {
	color:white;
	margin-left: 340px;
	list-style:none;
}
ul li{
	float: left;
	width: 200px;
	height: 30px;
	background-color: #8ce58f;
	opacity: .9;
	font-size: 17px;
	text-align: center;
}
ul li a{
	text-decoration: none;

}
ul li:hover{

	background-color: green;
}

body{
	font-family: sans-serif;
	background-color:  #7fc8dc;
}

img{
	border-radius: 50px;
	border:2px solid grey;
}
img:hover{
	border-radius: 60px;
	border:4px solid grey;	
}
#name{
	font-size: 30px;
}
</style>