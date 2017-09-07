<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<title>Scrapbook Login</title>
	<script type="text/javascript" src="main.js"></script>
</head>
<body>
<center>
<h1>Login to Scrapbook</h1>
<h3></h3>
<hr></hr>
<div id="main">
<form action="" method="post">
		<label><input type="text" class="inp" id="email" placeholder="Email" name="email"><br>
		<label> <input type="password" class="inp" placeholder="Password" name="password"></label><br>
		<input type="checkbox" name="remember">Remember Me
		<center><input type="submit" class="btn" id="btn" name="btn" value="Login"></center>
</form>
</div><br>
<span id="sd"></span>
</center>
</body>
</html>
<style type="text/css">
body{
	font-family: sans-serif;
	background-color:  #88d7ec;
}
.inp{
	height: 25px;
}
#sd{
	margin-top: 100px;
	font-size: 20px;
}
input{
		border-radius: 5px;
		font-size: 15px;
		margin-bottom: 10px;
		box-shadow: 2px 4px black;
	}
#main{
		background-color: #4ECAEE;
		margin-top: 180px;
		margin-bottom: 100px;
		box-shadow: 3px 2px 6px black;
		border: 1px solid #81B1BF;
		border-radius: 10px;
		margin-right: 400px;
		margin-left: 400px;		
	}
	hr{
	margin-left: 100px;
	margin-right: 100px;
}
.btn:hover{
	background-color:  #20da4d; 
}
</style>
<?php
include('login_backend.php');
?>