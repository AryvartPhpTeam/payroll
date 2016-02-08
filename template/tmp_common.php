<!-- Template Starts here -->
<html>
	<head>
	<!-- Insert CSS Script Title here -->
	</head>
	<body>
		<?php 
		echo $page;
		exit;	
		if($page !="invo")
		{
			
			include(TEMPLATE_PATH.'header.php');
				include(TEMPLATE_PATH.'sidebar.php');
				include(TEMPLATE_PATH.$page.'.php');
				include(TEMPLATE_PATH.'footer.php');
		}
		else{	

			include(TEMPLATE_PATH.$page.'.php');
				}
		?>
	</body>
</html>