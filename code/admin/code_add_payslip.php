<?php
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit;
}

$title=" Add Payslip ";

if(isset($_POST['submit']))
{
	$month=$_POST['month'];
	$year=$_POST['year'];
	$empno=$_POST['employeeno'];
	$leave=$_POST['leave'];
$d=cal_days_in_month(CAL_GREGORIAN,$month,$year);
$user=$_SESSION['user']['id'];
$news_res = $sqlobj->query("select * from employee where empno='$empno'");
$basic = $news_res[0];
$gross=$basic['gross'];
$ta=$basic['ta'];
$da=$basic['da'];
$gross_deduction=($gross/$d)*($leave);
$salary=($gross/$d)*($d-$leave)+($ta+$da);
$sqlobj->query("insert into payslip(empno,leavedays,no_of_days,month,year,deduction,salary,user_id) values('$empno','$leave','$d', '$month', '$year','$gross_deduction','$salary','$user')");
header("location:payslip.php");

}

$news_res = $sqlobj->query("SELECT * from employee");
$employee = $news_res;



if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';
	?>