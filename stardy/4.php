<!DOCTYPE html>
<html>
	<head>
		<body background='sc.jpg'>
		<body style='background-repeat:no repeat;
		background-size:100% 100%;
		background-attachment:fixed;'>
		<meta charset ='UTF-8'>
	</head>
		<body>
			
			<?php
				echo '<p>&nbsp;&nbsp;<font size="6" face="DFkai-sb">歡迎來到阿晟網站</font><br></p>';
			?>
			<?php require 'for.php'; ?>
			<a href="c/ca.php">商品總額計算<br></a>
			<?php require 'for.php'; ?>
			<a href="c/a.php">求三角形面積<br></a>
			<?php require 'for.php'; ?>
			<a href="c/fb.php">餐飲菜單<br></a>
			<?php require 'for.php'; ?>
			<a href='c/q.php'>阿晟flag問題大考驗<br></a>
			<?php require 'for.php'; ?>
			<a href='c/ci.php'>各縣市人數查詢<br></a>
			<?php require 'for.php'; ?>
			<a href='c/gu.php'>軍火庫(需密碼認證<br></a>
			<?php require 'for.php'; ?>
			<a href='c/ch.php'>大樂透(電腦選號)<br></a>
			<?php require 'for.php'; ?>
			<a href='c/as.php'>訪客評價系統<br></a>
			<?php require 'for.php'; ?>
			<a href='c/pr.php'>圖片列印</br></a>
			<?php require 'for.php'; ?>
			<a href="c/bs.php">Database</br></a>
			<?php require 'for.php'; ?>
			<a href="c/test.php">test用的</br></a>
			<?php require 'for.php'; ?>
			<a href="c/back.php" target="_blank">後端管理</br></a> <!-- target="_blank" 具有開啟心分業的功能-->
			<?php require 'for.php'; ?>
			<a href="c/shopping_network.php">購物網站</br></a>
			
			<br><b><font>time-recorded</font></b>
			<?php
				date_default_timezone_set('Asia/Taipei');
				echo date('Y/m/d H:i:s');
			?>
		</body>

</html>



						