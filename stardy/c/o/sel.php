<!DOCTYPE html>
	<html>
		<head>
			<meta charset='UTF-8'>
			<body background='66.jpg'>
			<body style='background-repeat:no repeat;
				background-size:100% 100%;
				background-attachment:fixed;'>
		</head>
			<body>
				<?php
					if(isset($_REQUEST['a'])){
						for($j=1;$j<=$_REQUEST['group'];$j++){
							echo '<br>';
							echo '第',$j,'組:';
							//echo '<br>';
							for($i=0;$i<6;$i++){
								echo '<b><font color="black">',rand(1,49),'</font></b>';
								echo '&nbsp;';
							}
						}
					}
						else{
				
						echo '你沒勾選 電腦選號';	
						}
						
				?>
			</body>
	</html>
