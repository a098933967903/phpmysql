﻿<!DOCTYPE html>
	<html>
		<head>
			<meta charset='UTF-8';>
			<body background='sn.jpg'>
			<body style='background-repeat:no repeat;
				background-size:100% 100%;
				background-attachment:fixed;'>
		</head>
			<body>
				<p><b><font size='6' face='' color='whute'></font></b></p>
				<p><b><font size='6' face='' color='white'>Please,select your mode</font></b></p>
				<form action='o/sel.php' method='post'>
					<p><input type='radio' name='a' >電腦選號 </p>
				<//input type='text' name='hand-input'>
					<select name='group'>
					<?php
						for($i=1;$i<101;$i++){
							echo '<option value="',$i,'">',$i,'組','</option>';
						}
					?>
				</select>
					<p><input type='submit' value='sure'></p>
				<?php
					echo '<img src="A',rand(1,2),'.png">';
				?>	
				</form>
			</body>
	</html>
	