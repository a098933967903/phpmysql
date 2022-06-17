<html>
	<head>
		<body background='ga.jpg'>
		<body style='backgrond-repeat:no-repeat;
		background-size:100% 100%;
		background-attachment:fixed;'>
		<meta charset='UTF-8'>
	</head>
		<body>



		<//?php require '../header.php';?>
					<b><p><font size='6' face='DFKai-sb'color='white'>Select your gender</font></p></b>
					
					<form action ="4.php" method="post">
						
						<input type ="checkbox" name="man"><font color='white'>man</font>
						<input type ="checkbox" name="women"><font color='white'>women</font><br>
						<b><p><font size='6' color='white'>Please input your age and name</font></p></b>
						
						<select name ='count'>
						<?php
							for($i=2022;$i>=1922;$i--){
							echo '<option value="',$i,'">','西元',$i,'年','</option>';
							echo '&nbsp;';
							echo 'name';
							}
						?>	
						<input type ="text" name="name">
						<input type ="submit" value="sure">
					</form>
					
					<?php
						date_default_timezone_set('Asia/Taipei');
						echo "<font size='4' color='white'>",'Time-recorded:','&nbsp;',date("Y/m/d/ H:i:s"),"</font>";
					?>

					
		<//?php require '../footer.php';?>
		</body>
</html>