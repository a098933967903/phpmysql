<?php require 'header.php';
	  require 'menu.php';
	  ?>


<form action="product.php" method="post">
	product search <input type="text" name="keyword">
	<input type="submit" value="search">
</form>
<hr>   <!--水平線-->

<?php 

echo '<table>';
echo '<th>商品編號</th><th>商品</th><th>價錢</th>';
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8',
	'staff','password');

if(isset($_REQUEST['keyword'])){
	$sql=$pdo->prepare('select * from product where name like ?');
	$sql->execute(['%'.$_REQUEST['keyword'].'%']);
}

else{
	$sql=$pdo->prepare('select * from product');
	$sql->execute([]);
}
foreach($sql->fetchAll() as $row){
	echo '<tr>';
	echo "<td>$row[id]</td>";

	echo '<td>';
	echo '<a href="dt.php?id=',$row['id'],'">',$row['name'],'</a>';
	echo '</td>';

	echo "<td>$row[name]</td>";
	echo '</tr>';
}
echo '</table>';

require 'footer.php';?>
