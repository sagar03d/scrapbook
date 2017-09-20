<?php
class Main{
	public $connect;
	function __construct(){
		session_start();
		$server = "localhost";
		$user = "root";
		$password = "root";
		$dbName = "scrapbook";
		$this->connect = mysqli_connect($server,$user,$password,$dbName) or die(mysqli_error($this->connect));
	}

	//Sign up data insertion purpose
	function insert($name,$password,$email,$birthday,$city,$skill,$gender,$destination){
		$query = mysqli_query($this->connect,"INSERT INTO user(name,password,email,birthday,city,skill,gender,image,Status,online) VALUES('$name','$password','$email','$birthday','$city','$skill','$gender','$destination',0,0)");
		return $query;
	}

	//Log in purpose
	function authentication_check($email,$password){
		$query = mysqli_query($this->connect,"SELECT email, password FROM user WHERE email='$email'") or die(mysqli_error($this->connect));
		$row = mysqli_fetch_array($query);
		if($email == $row['email'] && $password == $row['password']){
			return 'Valid';
		}
		else
		{
			return 'Invalid';
		}
	}
	//Getting Number of rows
	function numberOfrows($query){
		$a = mysqli_num_rows($query);
		return $a;
	}
}
$ob = new Main();
?>