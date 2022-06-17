<?php 
    if(!empty($_SESSION['product'])){
    echo '<table>';
    echo '<th>id</th><th>name</th><th>price</th><th>count</th><th>total</th>';
    
    $total=0;
    foreach($_SESSION['product'] as $id=>$product){
        echo '<tr>';
        echo "<td>$id</td>";
        echo '<td><a href="dt.php?id=',$id,'">',$product['name'],'</a></td>';
        echo "<td>$product[price]</td>";
        echo "<td>$product[count]</td>";

        $total_a=$product['price']*$product['count'];
        $total+=$total_a;

        echo "<td>$total</td>";
        echo '<td><a href="delete_car.php?id=',$id,'">delete</a></td>';
        echo '</tr>';
    }
    echo '<tr><th>合計</th><th></th><th></th><th>',$total,'</th><th></th></tr>';


    echo '</table>';
    }
    else echo '購物車空無一物';
?>