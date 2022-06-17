<?php 

    if(isset($_SESSION['customer'])){
        echo '<table>';
        echo '<th>id</th><th>name</th><th>price</th>';
        $pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff','password');
        $sql=$pdo->prepare('select * from product,favorite where customer_id=? and product_id=product.id');
        $sql->execute([$_SESSION['customer']['id']]);


        foreach($sql->fetchAll() as $row){
            echo '<tr>';
            echo "<td>$id</td>";
            echo '<td><a href="dt.php=?id',$id,'">',$row['name'],'</a></td>';
            echo "<td>$row[price]</td>";
            echo '<td><a href="delete_fav.php=?id',$row['id'],'">刪除</a></td>';
            echo '</tr>';   
        }
    }
    echo "</table>";
?>