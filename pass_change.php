<!DOCTYPE html>
<html>
<head>
	<title>Password Change</title>
</head>
<body>
<center>
<h1>Change your Password</h1>
<h3></h3>
<hr></hr>
<div id="main">
<form action="" method="post">
<table>
	<tr>
		<td><label>Old Password: <input type="password" name="old_pass" style="width:60%;"></label><br></td>
	</tr>
	<tr>
		<td><label>New Password: <input type="password" name="new_pass" style="width:58%;"></label><br></td>
	</tr>
	<tr>
		<td><label>Confirm Password: <input type="password" name="confirm_pass" style="width:51%;"></label><br></td>
	</tr>
	<tr>
		<td><center><input type="submit" class="btn" name="btn" value="Confirm"></center></td>
	</tr>
</table>
</form>
</div>
</center>
</body>
</html>
<style type="text/css">
body{
	font-family: sans-serif;
	background-color:#54c13a;
}
	input{
		margin-bottom: 8px;
	}
	#main{
		margin-top: 180px;
	}
	hr{
	margin-left: 100px;
	margin-right: 100px;
}
.btn{
	background-color:#3eee69;
	padding: 10px 20px;
	border-color:  #92e9a7;
	border-radius: 8px;
	box-shadow: 7px 8px 6px #222;
}
.btn:hover{
	background-color:  #20da4d; 
}
</style>

<?php
include('pass_change_backend.php');
?>