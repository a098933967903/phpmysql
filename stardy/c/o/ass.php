<!DOCTYPE html>
	<html>
		<head>
			<meta charset='utf-8'>
			<body background=''>
			<body style='background-repeat:no repeat;
				background-size:100% 100%;
				background-attachment:fixed;'>
		</head>
			<body>
			<?php
				$file='A.txt';
				$A=$_REQUEST['m'];
					if(file_exists($file)){
						$file1=json_decode(file_get_contents($file));
					}
					$file1[]=$A;
					file_put_contents($file,json_encode($file1));
					foreach($file1 as $f){
						echo '<p>',$f,'</p><hr>';
					}
					
				?>	
			</body>
	</html>