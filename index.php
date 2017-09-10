<!DOCTYPE html>
<html>
<head>
<script src="jquery-3.2.1.js"></script>
<script src="jquery-ui.js"></script>
<link rel="stylesheet" href="jquery-ui.css">
	<title>sign up</title>
	<script type="text/javascript">
	/*function sub(){
		$a = document.getElementById("name").value;
		if($a == ""){
			alert("Please enter your name");
			return false;
		}
	}*/
		$(document).ready(function(){
			$("#birthday").datepicker();

			$("#btn").click(function(){
				var flag = 0;
					var gender = $('[name="gender[]"]');
				for(var j=0;j<gender.length;j++){
					if(gender[j].checked){
						flag++;
					}
				}

					if($('[name="name"]').val()==""){
				alert("Please Enter your name");
				$('[name="name"]').focus();
				return false;
				}

				if($('[name="password"]').val()==""){
				alert("Enter your password");
				$('[name="password"]').focus();
				return false;
				}

				if($('[name="email"]').val()==""){
				alert("Enter your email");
				$('[name="email"]').focus();
				return false;
				}

				if($('[name="birthday"]').val()==""){
				alert("Enter your birthday");
				$('[name="birthday"]').focus();
				return false;
				}

				if($('[name="city"]').val()==""){
				alert("Choose your city");
				$('[name="city"]').focus();
				return false;
				}
				if(flag==0){
					alert("Please Select your gender");
					return false;
				}
			});
			$("#em").blur(function(){
			var main,at, dot;
			main = $("#em").val();
			at = main.indexOf("@");
			dot = main.lastIndexOf(".");
			if(at<1 || dot<at+1 || dot+1>=main.length){
				alert("Please Enter a valid Email");
			}

		});
		});
	</script>
</head>
<body>
<center>
<h1>Welcome to ScrapBook</h1>
<h3>It's always free</h3>
<hr></hr>
<div id="main">
<form action="index_backend.php" method="post" enctype="multipart/form-data">
<table>
	<tr>
		<td><label>Name:<input type="text" name="name" style="width:70%;"></label><br></td>
	</tr>
	<tr>
		<td><label>Password: <input type="password" name="password" id="password" style="width:60%;"></label></td><br>
	</tr>
	<tr>
	<td><label>Email: <input type="text" name="email" id="em" style="width:70%;"></label></td><br>
	</tr>
	<tr>
	<td><label>Birthday: <input type="text" id="birthday" name="birthday" style="width:63%;"></label></td><br>
	</tr>
	<tr>
	<td><label>City: <select name="city">
		<option>Select a City</option>
		<option value="Mumbai">Mumbai</option>
		<option value="Delhi">Delhi</option>
		<option value="Bangalore">Bangalore</option>
		<option value="Jaipur">Jaipur</option>
		<option value="Ranchi">Ranchi</option>
		<option value="Kolkata">Kolkata</option>
		<option value="Jaisalmir">Jaisalmir</option>
	</select></label></td><br>
	</tr>
	<tr>
	<td><label id="ex">Select skill: C<input type="checkbox" name="sk[]" value="C">
					  C++<input type="checkbox" name="sk[]" value="C++">
					  PHP<input type="checkbox" name="sk[]" value="PHP">
					  Java<input type="checkbox" name="sk[]" value="Java">
	</label></td><br>
	</tr>
	<tr>
	<td><label>Gender: Male<input type="radio" value="Male" name="gender[]">Female<input type="radio" value="Female" name="gender[]">Others<input type="radio" value="Others" name="gender[]"></label></td><br>
	</tr>
	<tr>
	<td><label>Image: <input type="file" name="image" style="width:70%;"></label></td><br>
	</tr>
	<tr>
	<td><br><center><input type="submit" id="btn" name="submit" value="Sign Up"></center><td>
	</tr>
</table>
<p>Already have an account! <span id="login"><a href="login.php">Login</a></span> here</p>
<p><span id="login2">If you're one of the Admin <a href="admin-log.php">Login</a> Here</span></p>
</form>
</div>
</center>
</body>
</html>
<style type="text/css">
body{
	background-color:  #e1f3c9;
	font-family: sans-serif;
	color:black;
}
a{
	text-decoration: none;
}
a:link {
    color: blue;
}
a:hover {
    color: green;
}

hr{
	margin-left: 100px;
	margin-right: 100px;
}
#btn{
	background-color:   #3eee69;
	padding: 10px 20px;
	border-color:  #92e9a7;
	border-radius: 8px;
	box-shadow: 7px 7px 3px #222;
}
label{
	font-size: 20px;
}
#main{
	margin-top: -120px;
	font-size: 17px;
}
input { 
	margin-right: 10px;
	border-radius: 5px;
	font-size: 15px;
	margin-bottom: 8px; }
</style>