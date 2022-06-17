<!DOCTYPE html>
<html>
    <head>
        <mata charset utf-8>
    </head>
    <body>
        <table>
            <tr><th>id</th><th>weapons</th><th>price</th></tr>
            
            <?php
            $pdo=new PDO('mysql:host=localhost;dbname=Arsenal;charset=utf8','Big_boss','password');
            foreach($pdo->query('select * from light_weapons') as $row){
                echo"<tr>";
                echo"<td>$row[id]</td>";
                echo"<td>$row[name]</td>";
                echo"<td>$row[price]</td>";

                echo'<td>';
                echo'<a href="l/delete_output.php?id=',$row['id'],'">確認刪除</a>';
                echo'</td>';
                echo'</tr>';
                echo"\n";
            }
            ?>

        </table>
    </body>
</html>