<!DOCTYPE html>
<html>
	<head>
		<body background ='gt.jpg'>
		<body style='background-repeat:no repeat;
			background-size:100% 100%;
			background-attachment:fixed;'>	
		
		<meta charset="utf-8">
	</head>	
		<body>	
			<p><b><font size='6' face='DFKai-sb' >阿晟大考驗</font></b></p>
			<form action='o/qq.php' method='post'>
				<select name='chanllenge'>
					<?php
						$question=['阿晟最喜歡的水果','阿晟最喜歡的顏色','阿晟讀的國小','阿晟的生日','FLAG-MD5-MEOW'
							];
						foreach($question as $m){
							echo '<option vlaue="',$m,'">',$m,'</option>';
						}
					?>
					</select>
					<p><b><font size='6'>Answer</font></b></p>
					<input type='text' name='answer1'>
					
					<?php
						echo '&nbsp;&nbsp;';
					?>
					
					<input type='submit' value='sure'>
			
			</form>
			<a href='o/flag.php'>flag 提示</a>
			
		</body>
</html>