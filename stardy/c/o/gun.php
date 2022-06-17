<!DOCTYPE html>
<html>
	<head>
		<body background='1.jpg'>
		<body style='background-repeat:no repeat;
			background-size:100% 100%;
			background-attachment:fixed;'>
		<meta charset='UTF-8'>
	</head>
		<body>
			
			<?php
			
			$p=$_REQUEST['p'];
			$a='Aa098933967903';
				if(isset($_REQUEST['gun'])&&preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-Z0-9]{5,}/',$p)){
					if($p==$a){	
						date_default_timezone_set('Asia/Taipei');
						echo "<b><p><font size='6' face='DFKai-sb'>感謝訂購 訂單已送出</font></p></b>";
						echo '<p>';
						echo '該次訂購時間為',date('Y/m/d H:i:s');
						echo '</p>'; 
						foreach($_REQUEST["gun"] as $b){
							echo '<p>';
							echo $b;
							echo '&nbsp;USD';
							echo '</p>';
							//echo "sum($_REQUEST['gun]) =" .sum($_REQUEST)."\n";
						}
						
						}
						else{
							echo "<b><p><font size='7' face='DFKai-sb'>密碼錯誤(沒那麼簡單 哈哈 其實有點難XD</font></p></b>";
					}
				}
					else{
						echo "<b><p><font size='7' face='DFKai-sb'>您未選擇商品或密碼格式錯誤或密碼錯誤</font></p></b>";
						
					}
		
			?>				
		</body>
</html>