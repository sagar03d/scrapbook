<?php
include('connection.php');
$id = $_REQUEST['i'];
$query = mysqli_query($ob->connect,"UPDATE user SET Status = CASE WHEN Status = '0' THEN '1' ELSE 0 END WHERE id='$id'") or die(mysqli_error($ob->connect));
// header("Location:admin-profile.php?id='$id'");
if($query==True){
	echo "<button>Unblock</button>";
}
?>