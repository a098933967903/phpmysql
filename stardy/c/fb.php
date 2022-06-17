<!DOCTYPE html>
<html>
	<head>
		<body background='kb.jpg'>
		<body style='background-repeat:no repeat;
		background-size:100% 100%;
		background-attachment:fixed;'
		<meta charset ='UTF-8'>
	</head>

	<body>
		<?php require '../header.php';?>
		<form action='o/fab.php' method='post'>
			
			<b><p><font size='6' face='DFKai-sb'color=''>請選擇您的套餐</font></p></b>
				<p><input type='radio' name='meal' value='80'>便宜又大碗80元</p>
				<P><input type='radio' name='meal' value='1500'>我沒醉1500元</P>
				<p><input type='radio' name='meal' value='50000'>心痛的感覺50000元<br></p>
			<b><p><font size='5' color='' face='DFKai-sb'>請選擇您所需的服務</font></p></b>
				<select name='service'>
					<option value='1.05'>普通服務</option>
					<option value='1.2'>妹子服務</option>
					<option value='1.2'>帥哥服務</option>
					<option value='1.4'>VIP 服務</option>
				</select>
			<b><p><font size='5' color='' face='DFKai-sb'>請輸入用餐人數</font></p></b>
			<select name='people'>
				<?php
					$i=1;
					while($i<=50){
						echo '<option value="',$i,'">',$i,'人','</option>';
						$i++;				 
					}
				?>     
			</select>
			留言區<p><input type='text' name='as'></p>
			<p><input type='submit' value='sure'></p>
		</form>
		<?php require '../footer.php';?>
		<img src='2.png'>
	</body>
	
</html>