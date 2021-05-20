<?php
session_start();
define('user','root');
define('password','root');
define('host','localhost');
define('db','dbtest');
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
	if(empty($_POST['user']) || empty($_POST['pass'])){
		$error = "Username or Password is Invalid";
	}
	else
	{
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$_SESSION['username'] = $user;
		$conn = mysqli_connect(host, user, password);
		$db = mysqli_select_db($conn, "dbtest");
		$query = mysqli_query($conn, "SELECT * FROM loginsys WHERE pass='$pass' AND user='$user'");

		$rows = mysqli_num_rows($query);
		if($rows == 1){
			header("Location: home.php"); // Redirecting to other page
		}
		else
		{
			$error = "Username of Password is Invalid";
		}
		mysqli_close($conn); // Closing connection
	}
}

?>
