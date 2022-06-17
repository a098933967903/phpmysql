<?php require '../header.php'; 
	  require 'menu.php'; 

	 session_start();
	 if(isset($_SESSION['customer'])){
		 unset($_SESSION['customer']);
		 echo "登出成功";
	 }
	 else echo "你沒登入八";

require '../footer.php'; ?>
