<?php

$host="localhost";
$user="root";
$password="";
$db="demo1";

mysql_connect($host, $user, $password);
mysql_select_db($db);

if(isset($_POST['username']))
{
	$uname = $_POST['username'];
	$password = $_POST['password'];

	$sql="SELECT * FROM userid;"; //WHERE user=?;";
	/*
	$result = mysqli_query($sql);

	if(mysqli_num_rows($result)==1){
		echo "Successful";
	}
	else{
		echo "Incorrect Password";
	}

*/
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<div class="login-page">
		<div class="form">
			<form class="Registration-form" method="POST" action="#"> 
				<input type="text" name="username" placeholder="user name"/>
				<input type="password" name="password" placeholder="password"/>
				<input type="text" name="emialid" placeholder="email id"/>
				<button>Create</button>
			</form>
		</div>
	</div>
	 <!-- FOOTER -->
</body>
</html>

