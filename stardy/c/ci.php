<!DOCTYPE html>
	<html>
		<head>
			<body background='kj.jpg'>
			<body style='background-repeat:no repeat;
			background-size:100% 100%;
			background-attachment:fixed;'>
			<meta charset='UTF-8'>
		
		</head>
			<body>
				<P><b><font size='6' color='white'>Select what yor want to know the population of the city?</font></b></P>
						<form action='o/cf.php' methon='post'> 
						<select name='city'>
							<?php
								$City=['新北市'=>4019898,'臺中市'=>22148968,'臺北市'=>2553798,'高雄市'=>2753530,'桃園市'=>2272976,'臺南市'=>21916531,'彰化縣'=>1259246,'屏東縣'=>807159,'	新竹縣'=>573858,
								'雲林縣'=>672557,'苗栗縣'=>539879,'	嘉義縣'=>495662,'南投縣'=>487185,'新竹市'=>452781,'宜蘭縣'=>451635,'金門縣'=>140004
								];
								foreach($City as $k=>$v){
									echo '<option value="',$k,$v,'">',$k,'</option>';
								}
							?>
							
						
						</select>
						<input type='submit' value='sure'>
						
					</form>
			</body>
	</html>






















