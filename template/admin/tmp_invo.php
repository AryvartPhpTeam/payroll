
<html>
<head>
	<title>
</title>
</head>
<body>
<?php 
$mpdf=new mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0); 
 
$mpdf->SetDisplayMode('fullpage');
 
$mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
$html .= " <center><h1> Pay Slip For The Period".date(' j  M Y  ')."</h1></center>";
 foreach($news_res as $res){
							        
   }                          
$html .= "<table>";
	$html .= "<tr>";
		$html .= "<td>Name  :</td><td>".$res['empname']."</td>";
	$html .= "</tr>	<tr><td>designation  :</td><td>". $res['designation']."</td>
	</tr>
	<tr>
		<td>Date Of Joining  :</td><td>". date('d-m-Y', strtotime($res['doj']))."</td>
	</tr>
	<tr>
	<td>Pay Days :</td> <td>". $res['no_of_days']."</td>
	</tr>
	<tr>
	<td>Basic :</td>:<td>". $res['gross']."</td>
	</tr>
	<tr>
	<td>Leave  :</td>:<td>". $res['leavedays']."</td>
	</tr>
	<tr>
	<td>TA :</td>:<td>". $res['ta']."</td>
	</tr>
	<tr>
	<td>DA :</td>:<td>". $res['da']."</td>
	</tr>
	<tr>
	<td>Deduction :</td>:<td>". $res['deduction']."</td>
	</tr>
	<tr>
	<td>Net Salary :</td>:<td>". $res['salary']."</td>
	</tr>
</table>";

 $mpdf->WriteHTML($html);
//$mpdf->WriteHTML('');
         
$mpdf->Output();
?>
	

</body>
</html>