<!DOCTYPE html>
<html>
	<head>
		<body background="Z.jpg">
		<body style='background-repeat:no repeat;
			background-size:100% 100%;
			background_attachment:fixed;'>
		<meta charset='utf-8'>
		<style>
			h3{
				color: red;
			}
		</style>
		
	</head>
		<body>
			<p><b><font size='8' color='white' face='KDFai-87'>Wellcome to arms shop. Please,select your favorit guns and buy it.</font></b></p>
			<form action='bso.php' methon='post'>
				<h3>輸入商品名稱</h3>
				<input type="text" name='keyword'> 
				<input type="submit" value='search'>
			</form>
			<form action='o/gun.php' methon='post'>
				<?php
					$gun=['P90'=>2000,'S686'=>1500,'Vector'=>2500,'MP5'=>2250,'AUG'=>4000,'Groza'=>4500,'Ak47'=>3200,'M416'=>3800,'M16A4'=>3500,'QBZ'=>3600,'M249'=>5000,'Min14'=>5500,'SKS'=>6000,'QBU'=>5600,'Kar98'=>6000,'M24'=>6800,'AWM'=>8000,'bulletproff cloths'=>1000
					];
					foreach($gun as $item=>$m){
						echo '<p>';
						echo '<input type="checkbox" name="gun[]" value="',$item,$m,'">';
						echo "<font size='5'color='pink'>$item</font>";
						echo "<font size='5'color='pink'>&nbsp;$m &nbsp;US</font>"; #不要加''
						echo '</p>';
						
					}
				?>
				<b><font color='pink'>Password</font></b><input type='password' name='p' maxlength='13'>
				<p>PASSWORD:Aa098933967903</p>
				<input type='submit' value='sure'>
				
			</form>
		</body>
</html>
	