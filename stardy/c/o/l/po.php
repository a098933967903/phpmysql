<!DOCTYPE html>
	<html>
		<head>
			<meta charset='utf-8'>
			<body background=''>
			<body style='background-repeat:no repeat;
				background-size:100% 100%;
				background_attachment:fixed;'>
				</head>
			<body>
				<?php
				$message=com.txt;
					if(file_exists($a)){
						$message1=json_decode(file_get_contents($message))
					}
					
				$message1[]=$_REQUEST['A'];
					file_put_contents($message,json_encode($message1))
						foreach($message1 as $m1){
							echo '<p>$ma,<hr></p>'
						}	
					
			
			?>
			</body>
	</html>