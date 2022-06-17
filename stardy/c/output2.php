<!DOCTYPE html>
<html>
	<head>
		<meta charset ="UTF-8">
	</head>
		<body>
			<?php require '../header.php';?>
			
			<?php 
				if(isset($_REQUEST["price"],$_REQUEST["count"])){
					$p = $_REQUEST["price"];
					$c = $_REQUEST["count"];
					echo $p, '元X';
					echo $c, '個=';
					echo $p*$c,'元';
				}
			?>
			
			<?php require '../footer.php';?>
		</body>
</html>