<!DOCTYPE html>
	<html>
		<head>
			<body background='ff.jpg'>
			<body style='background-repeat:no repeat;
			background-size:100% 100%;
			background-attachment:fixed;'>
			<meta charset ="UTF-8">
		</head>
			<body>
				<//?php require '../header.php';?>
				
				<?php 
					$b = $_REQUEST['b'];
					$c = $_REQUEST['c'];
					$a = $_REQUEST['a'];
					$answer = 1/2*$b*$c*$a;
					echo '三角面積=',$answer,'cm**2';
				?>
				
				<//?php require '../footer.php';?>
				
			</body>
	</html>