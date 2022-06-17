<?php require '../header.php'; 
 	  require 'menu.php';

	session_start();
	$name=$address=$login=$password="";

	if(isset($_SESSION['customer'])){
		$name=$_SESSION['customer']['name'];
		$address=$_SESSION['customer']['address'];
		$login=$_SESSION["customer"]['login'];
		$password=$_SESSION['customer']['password'];
		}

		echo '<form action="cus_o.php method ="post">';
		echo '<table>';

		echo '<tr>';
		echo '<td>你的名子</td>';
		echo '<td><input type="text" name="name" value="',$name,'"></td>';
		echo '</tr>';

		echo '<tr>';
		echo '<td>地址</td>';
		echo '<td><input type="text name="address" value="',$address,'"></td>';
		echo '</tr>';

		echo '<tr>';
		echo '<td>帳號</td>';
		echo '<td><input type="text name="login" value="',$login,'"</td>';
		echo '</tr>';

		echo '<tr>';
		echo '<td>密碼</td>';
		echo '<td><input type="password" name="password value="',$password,'"</td>';
		echo '</tr>';

		echo '</table>';

		echo '<input type="submit" value="確定">';
		echo '</form>';

require '../footer.php'; ?>
