﻿<!DOCTYPE html>
	<html>
		<head>
			<meta charset='utf-8'>
			<body background=''>
			<body style='background-repeat:no repeat;
				background-size:100% 100%;
				background-attachment:fixed;'>
		</head>
			<body>
			<?php
				if(is_uploaded_file($_FILES['x']['tmp_name'])){
					if(!file_exists('upload')){
						mkdir('upload');
					}
				}
		  	$fileB='upload/'.basename($_FILES['x']['name']);
				if(move_uploaded_file($_FILES['x']['tmp_name'],$fileB)){
					echo $fileB,'上傳成功';
				}
		 		else{
						echo '上傳失敗';
					}
				?>	
			</body>
	</html>