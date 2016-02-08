<?php
if(isset($_SESSION['user']))
{
	header("location:dashboard.php");
	exit;
}
$title="Signup Page";
if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$firstname= $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$status = $_POST['status'];
	$role= $_POST['role'];
	
	 
	
	$signup=$sqlobj->query("insert into users(username, firstname,lastname,email, password,status,role) values('$username','$firstname','$lastname','$email', '$password', '$status', '$role')");
	if($signup)
	{
			echo "hello";
	}
	
}


if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>