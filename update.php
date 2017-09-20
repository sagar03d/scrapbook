<?php include('connection.php');
if(isset($_SESSION['id'])){
$id = $_SESSION['id'];
}
$query = mysqli_query($ob->connect, "SELECT * FROM user WHERE id='$id'") or die("Connection Error");
$row = mysqli_fetch_array($query);
$ar = $row['skill'];
$br = $row['gender'];
$city = $row['city'];
$a = explode(",", $ar);
$b = explode(",",$br);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Profile</title>
</head>
<body>
<center>
<h1>Update your Scrapbook profile</h1>
<hr></hr>
<h2>Set new values</h2>
<div id="main">
<form action="update_backend.php" method="post" enctype="multipart/form-data">
<table >
	<tr>
		<td><label>Name:<input type="text" value="<?php echo $row['name']?>" name="name2" style="width:70%;"></label><br></td>
	</tr>
	<tr>
	<td><label>Email: <input type="text" name="email" value="<?php echo $row['email']?>" style="width:70%;"></label></td><br>
	</tr>
	<tr>
	<td><label>Birthday: <input type="text" name="birthday" value="<?php echo $row['birthday']?>" style="width:63%;"></label></td><br>
	</tr>
	<tr>
	<td><label>City:<select name="city">
		<option>Select your city</option>
		<option value="Mumbai" <?php echo $city=='Mumbai'?'Selected':''?>>Mumbai</option>
		<option value="Delhi" <?php echo $city=='Delhi'?'Selected':''?>>Delhi</option>
		<option value="Bangalore" <?php echo $city=='Bangalore'?'Selected':''?>>Bangalore</option>
		<option value="Jaipur" <?php echo $city=='Jaipur'?'Selected':''?>>Jaipur</option>
		<option value="Ranchi" <?php echo $city=='Ranchi'?'Selected':''?>>Ranchi</option>
		<option value="Kolkata" <?php echo $city=='Kolkata'?'Selected':''?>>Kolkata</option>
		<option value="Jaisalmir" <?php echo $city=='Jaisalmir'?'Selected':''?>>Jaisalmir</option>
	</select></label></td><br>
	</tr>
	<tr>
	<td><label>Select skill: C<input type="checkbox" name="sk[]" value="C" <?php echo in_array('C',$a)?'checked':''?>>
					  C++<input type="checkbox" name="sk[]" value="C++" <?php echo in_array('C++',$a)?'checked':''?>>
					  PHP<input type="checkbox" name="sk[]" value="PHP" <?php echo in_array('PHP',$a)?'checked':''?>>
					  Java<input type="checkbox" name="sk[]" value="Java" <?php echo in_array('Java',$a)?'checked':''?>>
	</label></td><br>
	</tr>
	<tr>
	<td><label>Gender: Male<input type="radio" value="Male" name="gender[]" <?php echo in_array('Male',$b)?'checked':''?>>Female<input type="radio" value="Female" name="gender[]">Others<input type="radio" value="Others" name="gender[]"></label></td><br>
	</tr>
	<tr>
	<td><label>Image: <input type="file" name="image" style="width:70%;"></label></td><br>
	</tr>
	<tr>
		<th><?php echo "<img src='$row[image]' height='20%' width='20%'>"?></th>
	</tr>
	<tr>
	<td><br><center><input type="submit" id="btn" name="submit" value="Update"></center><td>
	</tr>
</table>
</form>
</div>
</center>
</body>
</html>
<style type="text/css">
table{
	width: 500px !important;
}
#n{
	font-size: 26px;
	margin-right: 100px;
	margin-bottom: 200px;
}
label{
	font-size: 25px;
}
body{
	background-color: #E3F574;
}
h2{
	margin-left: -30px;
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
	font-size: 15px;
	box-shadow: 7px 7px 3px #222;
}
#btn:hover{
	background-color: blue;
	padding: 10px 20px;
	border-color:  #92e9a7;
	border-radius: 8px;
	font-size: 17px;
	box-shadow: 7px 7px 3px #222;
}
ul{
	list-style: none;
	margin-right: 700pt;
	margin-top:-440pt;
	text-align: left;
}
ul li{
	margin-bottom: 10px;
	font-size: 25px;
}
#main{
	margin-top: -100px;
	margin-left: 30px;
	font-size: 17px;
}
label{
	margin-bottom: 8px;	
}
input { 
	border-radius: 5px;
	margin-bottom:10px; }
</style>