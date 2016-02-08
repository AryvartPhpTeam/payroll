<?php
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit;
}

$title=" Add Employee ";
if(isset($_POST['submit']) && isset($_GET['id']))
{
	$empno= $_POST['empno'];
	$empname = $_POST['empname'];
	$designation= $_POST['designation'];
	$doj= $_POST['doj'];
	$doj1=date_format(date_create($doj),"Y-m-d");
	$gross= $_POST['gross'];
	$ta= $_POST['ta'];
	$da = $_POST['da'];
	$sqlobj->query("update employee set empno='$empno', empname='$empname', designation='$designation', doj='$doj1', gross='$gross', ta='$ta', da='$da' where id=".$_GET['id']);
	header("location:employee.php");

}
elseif(isset($_POST['submit']))
{
	$empno= $_POST['empno'];
	$empname = $_POST['empname'];
	$designation= $_POST['designation'];
	$doj= $_POST['doj'];
	$doj1=date_format(date_create($doj),"Y-m-d");
	$gross= $_POST['gross'];
	$ta= $_POST['ta'];
	$da = $_POST['da'];
	$user=$_SESSION['user']['id'];
	$room=$sqlobj->query("insert into employee(empno, empname, designation,doj,gross,ta,da,user_id) values('$empno', '$empname', '$designation', '$doj1', '$gross', '$ta', '$da','$user')");
	if($room)
		{
			
		   echo "<script> alert('Stored successfully'); </script>";
		    
		}
	else
	{
		echo "<script> alert('Failed to store to database. Contact your administrator'); </script>";
	}
	echo "<script> location.href='employee.php'; </script>";
}


if(isset($_GET['id']) && !empty($_GET['id']))
{
	$news_res = $sqlobj->query("select * from employee where id = ".$_GET['id']);
	$employee = $news_res[0];
}

if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>