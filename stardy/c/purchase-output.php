<?php require 'header.php';
	  require 'menu.php'; 

	session_start();
	$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff', 'password');
	$purchase_id=1;
	foreach ($pdo->query('select max(id) from purchase') as $row) {
		$purchase_id=$row['max(id)']+1;
}
$sql=$pdo->prepare('insert into purchase values(?,?)');
if ($sql->execute([$purchase_id, $_SESSION['customer']['id']])) {
	foreach ($_SESSION['product'] as $product_id=>$product) {
		$sql=$pdo->prepare('insert into purchase_detail values(?,?,?)');
		$sql->execute([$purchase_id, $product_id, $product['count']]);
	}
	unset($_SESSION['product']);
	echo '已完成訂購，記得給錢';
} else {
	echo '可憐,error,無法完成訂購。';
}

	 require 'footer.php'; ?>
