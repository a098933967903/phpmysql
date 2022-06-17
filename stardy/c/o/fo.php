<!DOCTYPE html>
<html>
	<head>
		<meta charset ="UTF-8">
	</head>

	<body>
		<? php require '../header.php';?>
		<? php
		switch($_REQUEST['meal']){
			case 'a':
				echo '牛肉麵訂單已送出'
			break;
				case 'b':
			echo '魚湯訂單已送出'
				break;
				case 'c':
			echo '白飯訂單 已送出'
				break;
		}
		?>
	</body>
</html>
	
	