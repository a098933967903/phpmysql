﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset ="UTF-8">
	</head>
		<body>
			<?php require '../header.php';?>
			
			<?php
			$_1 = $_REQUEST["ab"];
				$a=mb_convert_kana($_1,'a');
			$_2 = $_REQUEST["bc"];
				$b=mb_convert_kana($_2,'a');
			$_3 = $_REQUEST["ac"];
				$c=mb_convert_kana($_3,'a');
			//for($i=1;$i<4;$i++){
				//$_,$i=mb_convert_kana($_,$i,'a');
			//}
			
			$s = ($a+$b+$c)/2; //$_1,$_2,$_3
			$answer = ($s*($s-$a)*($s-$b)*($s-$c))**0.5; //$_1,$_2,$_3
			echo "三角面積=",$answer,"cm**2";
			?>
			
		</body>
</html>