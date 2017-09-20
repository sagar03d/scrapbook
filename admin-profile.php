<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<script type="text/javascript" src="jquery-3.2.1.js"></script>
</head>
<body>
<script type="text/javascript">
	function sub(obj){
		var id= obj;
		var x = new XMLHttpRequest();
		x.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				document.getElementById("spa1").innerHTML = this.responseText;
			}
		};
		x.open('GET','user_block.php');
		x.send();
	}
</script>
</body>
</html>
<?php
include('connection.php');
if(!isset($_GET['id'])){
	echo "You should not be here illegal";die;
}
else{
	$query = mysqli_query($ob->connect,"SELECT * from user ORDER BY id");
}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center>
<h1> Users Info of Scrapbook</h1></center>
<p><a href="admin-logout.php"><div id="logout">Logout</div></a></p>
	<table>
	<tr>
		<th>Name</th>
		<th colspan="2">Email</th>
		<th>Birthday</th>
		<th>City</th>
		<th>Skill</th>
		<th>Gender</th>
		<th>Image</th>
		<th colspan="2">Action</th>
	</tr>
	<?php
while($row=mysqli_fetch_array($query)){
	echo "<tr>
	<td>$row[name]</td>
	<td colspan='2'>$row[email]</td>
	<td>$row[birthday]</td>
	<td>$row[city]</td>
	<td>$row[skill]</td>
	<td>$row[gender]</td>
	<td><img src='$row[image]' height='100%'width='100%'></td>
	<td colspan='1'><span><a href='user_delete.php?id=$row[id]'>Delete</a></span></td> 
	<td><span id='spa1'><input type='button' value='Block' id='$row[id]' onclick='sub(this.id)'></span></td>
	</tr>";
}
?>
</table>
</body>
</html>
<style type="text/css">
table{
	table-layout: fixed;
	width: 100%;
	text-align: center;
	vertical-align: middle;
}
	a{
		text-decoration: none;
	}
</style>