﻿<!DOCTYPEE html>
<html>
	<head>
		<body background='t.jpg'>
		<body style='background-repeat:no repeat;
		background-size:100% 100%;
		background-attachment:fixed;'>
		<meta charset ='utf-8'>
	</head>
		<body>
		<form action='l/po.php' method='post'>
			<?php require '../header.php';?>
			<?php
				$m=$_REQUEST['m'];
				$s=$_REQUEST['s'];
				$p=$_REQUEST['phone'];
				$p1=mb_convert_kana($p,'a');
					//if(isset($p)){
						//if(preg_match('/^[0-9]{10}$/',$p)){
							//echo '電話格式正確';
						//	}
						//else{
							//echo '電話格式錯誤',$p;
					//	}
					//}
					if(isset($_REQUEST['pass'])&&isset($p)&&preg_match('/^[0]{1}[9]{1}[0-9]{8}$/',$p1)){
						echo '<b>手機號碼格式正確</b>';
						echo '<b><p>訂單已送出<br></p></b>';
						date_default_timezone_set('Asia/Taipei');
						echo '<p>';
						echo '<b>訂單日期及時間:</b>',date('Y/m/d H/i/s');
						echo '</p>';
						echo '<p><b>將盡快為您送達<br></b></p>';
						echo "<b>總額</b>",$m*$s,'<b>元</b>';
						
						
						//echo $_REQUEST['meal']*$_REQUEST['service'];
				
					}
						else {
						 	echo '<b>你沒認真看餐點內容或手機格式輸入錯誤 請回上一頁</b>';
						}
			?>
		<?php require '../footer.php';?>
			<p>顧客回應區<input type='text' name='m'></p>
		</form>
				
		</body>
</html>
	