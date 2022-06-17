<?php require 'header.php';
      require 'menu.php';

$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff', 'password');
$sql=$pdo->prepare('select * from product where id=?');
$sql->execute([$_REQUEST['id']]);

foreach($sql->fetchAll() as $row){

    echo '<p><img src="image/',$row['id'],'.jpg"></p>';
    echo '<form action="cart-in.php" method="post">';
    echo "<p>id:$row[id]</p>";
    echo "<p>product_name:$row[name]</p>";
    echo "<p>price:$row[price]</p>";

    echo '<p>數量<select name="count">';
    for($i=0;$i<15;$i++) echo '<option value="',$i,'">',$i,'</option>';
    echo '</select>';


    echo '<input type="hidden" name="id" value="',$row['id'],'">';
    echo '<input type="hidden" name="name" value="',$row['name'],'">';
    echo '<input type="hidden" name="price" value="',$row['price'],'">';

    echo '<p><input type="submit" value="put product into the購物車"</p>';
    echo '</from>';
    echo '<p><a href="fav_inseert.php?id=',$row['id'],'">add into 我的最愛</a></p>';

    }

    require "footer.php"; ?>
