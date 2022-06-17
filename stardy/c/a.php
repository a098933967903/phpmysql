<!DOCTYPE>
<html>
	<head>
		<body>
			<body background='mm.jpg'>
			<body style='background=repeat:no repeat;
			background-size:100% 100%;
			background-attatchment:fixed;'>
			<meta charset ="UTF-8">
		</body>
	</head>
		<body>
			<?php require '../header.php';?>
			<?php 
				echo "<b>海龍公式<br></b>"
			?>
			<form action ="b.php" method="post">
				邊長ab<input type ="text" name="ab">cm
				邊長bc<input type ="text" name="bc">cm
				邊長ac<input type ="text" name="ac">cm
				<input type ="submit" value="運算">			
			</form>
				<img src='itemA.png'><br>	
			<?php
				echo "<b>sin角求法<b/>"
			?>
			<form action ="c.php" method='post'>
				Side b<input type ="text" name="b">cm
				Side c<input type ="text" name="c">cm
				Sin a<input type ="text" name="a">cm
				<input type ="submit" value="運算">
			</form>
				<img src="itemB.png"><br>
			
			<?php require '../footer.php';?>	
		</body>
</html>