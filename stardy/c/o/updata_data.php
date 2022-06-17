<!DOCTYPE html>
<html>
    <head>
        <meta charset utf-8>
    </head>
    <body>
        <table>
            <tr><th>id</th><th>weapons</th><th>price</th></tr>
        
        <?php
            //require 'pdo.php';
            $pdo=new PDO('mysql:host=localhost;dbname=Arsenal;charset=utf8','Big_boss','password');
            foreach($pdo->query('select * from light_weapons') as $row){  //query() 用來執行sql 命令 用出陣列
                echo '<tr><form action="l/updata_data_output.php" method="post">';

                echo '<input type="hidden" name="id" value="',$row['id'],'">';
                echo '<td>', $row['id'], '</td>';

                echo '<td><input type="text" name="name" value="',$row['name'],'"></td>';

                echo '<td><input type="text" name="price" value="',$row['price'],'"></td>';
                
                echo '<td><input type="submit" value="修改"></td></tr></form>';
                echo "\n";
            }
        ?>
        </table>
    </body>
</html>