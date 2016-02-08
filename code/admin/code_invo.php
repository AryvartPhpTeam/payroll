<?php
include("mpdf.php");
 
$news_res = $sqlobj->query("SELECT e.empname, e.designation, e.doj, e.ta, e.da, e.gross, p.empno, p.leavedays, p.no_of_days, p.month, p.deduction, p.salary
FROM payslip p
INNER JOIN employee e
WHERE e.empno = p.empno
");
$employee = $news_res;
echo TEMPLATE_PATH.$page.'.php';
if(file_exists(TEMPLATE_PATH.$page.'.php'))
	include(TEMPLATE_PATH.'common.php');
else
	echo 'Template file not found';