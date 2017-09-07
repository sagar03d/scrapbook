<?php
include('connection.php');
if(!isset($_GET['id'])){
	echo "You should not be here illegal";die;
}
else{
	$query=mysqli_query($connect,"SELECT * from user");
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
	<td><span><a href='user_block.php?id=$row[id]'>";
	echo $row['Status']=='0'?'Block':'Unblock'."</a></span></td>
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