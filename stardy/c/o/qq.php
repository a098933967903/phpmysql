﻿<!DOCTYPE html>
<html>
	<head>
		<body background='fk.jpg'>
		<body style='background-repeat:no repeat;
			background-size:100% 100%;
			background-attachment:fixed;'>
		<meta charest='UTF-8'>
	</head>
		<body>
			<?php
				$c1=$_REQUEST['chanllenge'];
				$a1=$_REQUEST['answer1'];
				$c='答對';
				$e='答錯哈哈';
				
					switch($c1){
					case '阿晟最喜歡的水果': #case 0: 
						if($a1=='芒果'){
							echo $c;
							
						}
							else{
								echo $e;
							}		
						break;
							
					case '阿晟最喜歡的顏色': #case 1:
						if($a1=='黑色'){
							echo $c;
							
						}
							else{									
								echo $e;
							}
							break;
					case '阿晟讀的國小': 		#case 2:
						if($a1=='鼓岩國小'){
							echo $c;
						}
							else{
								echo $e;
							}
						break;
					case '阿晟的生日':      #case 3:
						if($a1==911129){
							echo $c;
						}
							else{
								echo $e;
							}
					break;
					case 'FLAG-MD5-MEOW':#case 4:
						$A1=md5('MEOW');
						$x=$a1;
						$A2 =md5($x);
							if(isset($x)){
								if($A1 != $x && $A1==$A2){
									
									echo '<p>阿晟最喜歡的水果:','芒果</p>','<p>阿晟最喜歡的顏色:','黑色</p>','<p>阿晟讀的國小:','鼓岩國小</p>','<p>阿晟的生日:','911129</p>';
									}
									else{
										echo $e;
									}
								}	
							
					}		
					
			?>
					
		</body>
</html>