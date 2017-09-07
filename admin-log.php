<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="main.js"></script>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center>
<h1>Admin Login to Scrapbook</h1>
<h3></h3>
<hr></hr>
<div id="main">
<form action="" method="post">

<label><input type="text" placeholder="Email" id="email" name="email"></label><br>
		<label><input type="password" placeholder="Password" name="password"></label><br>
		<input type="checkbox" name="remember">Remember Me
	<center><input type="submit" class="btn" name="btn" value="Login"></center>
</form>
</div><br>
<div id="sd"></div>
</center>
</body>
</html>
<?php include('admin-log_backend.php');?>