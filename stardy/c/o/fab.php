<!DOCTYPE html>
<html>
	<head>
		<body background='sss.jpg'>
		<body style ='background-repeat:no repeat;
		background-size:100% 100%;
		background-attachment:fixed;'>
		<meta charset='UTF-8'>
	</head>
		<body>
			<?php require '../header.php';?>
			<?php
				echo '<br>';
				if(isset($_REQUEST['meal'])){
					switch($_REQUEST['meal']){
						case '80':
							echo "肉燥飯X1","黑輪X3",'貢丸X2','雞排X1','紅茶X1<br>';
							echo "80元<br>";
								break;
						case '1500':
							echo "威士忌300ml","長島冰茶300ml","金門高粱300ml","血腥瑪麗300ml<br>";
							echo '1500元<br>';
								break;
						case '50000':
							echo "白開水X1<br>";
							echo "50000元<br>";
					}
				}
					else{
						echo 'Attention!!!!!  你/妳沒勾選套餐<br>';
						echo '<br>';
					}
				
				$s='服務費'; 
				$a=$_REQUEST['service'];
				switch($_REQUEST['service']){
					case '1.05':
						echo $s,$a;
						break;
					case '1.2':
						echo $s,$a;
						break;
					case '1.2':
						echo $s,$a;
						break;
					case '1.4':
						echo $s,$a;
						break;
				}
				echo '<br>';	
			?>
				<form action="s.php" method='post'>
					<p>手動計算機 (哈哈 功力還不夠</p>
					<p>套餐價錢<input type='text' name='m' ></p>
					<p>服務趴數<input type='text' name='s' ></p>
					<p>手機號碼<input type='text' name='phone'>(開頭09 十個數字</p>
					<input type='checkbox' name='pass'>我十分確定我要點這個
					<input type='submit' value='sure'>
				</form>
		</body>
</html> 