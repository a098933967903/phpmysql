<!DOCTYPE html>
<html>
	<head>
			<body background='k.jpg'>
			<body style='background-repeat:no repeat;
			background-size:100% 100%;
			background-attachment:fixed;'>
		<meta charset = "UTF-8">
	</head>
		<body>
			
			<?php require '../header.php';?>
			
			<form action ="output2.php" method="post">
				價格<input type="text" name ="price">元X
				數量<input type="text" name ="count">個
				<input type="submit" value ="運算">
			</form>
			
			<?php require '../header.php';?>
			
		</body>
		
</html>
