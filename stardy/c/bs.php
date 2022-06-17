<!DOCTYPE html5>
<html>
    <head>
        <meta charset="utf-8">
        <body background="">
        <body style='background-repeat:no repeat;
        background-size:100% 100%;
        background-attachment:fixed;'> 
    </head>
        <body>
            <table>
                <tr>
                    <th>編號</th><th>weapons</th><th>價格</th>
                </tr>
            <?php
            
            $pdo=new PDO('mysql:host=localhost;dbname=Arsenal;charset=utf8','Big_boss','password');

            foreach($pdo->query('select * from Light_weapons') as $row){ //squery 引用database 裡的資料 變成陣列給php用

                echo "<tr><td>$row[id]</td><td>$row[name]</td><td>USD $row[price]</td></tr>\n";
                
                
                /*echo '<p>';
                echo '<td>',$row['id'],'</td>';
                echo '<td>',$row['name'],'</td>';
                echo '<td>','UD',$row['price'],'</td>';
                
                //echo '</p>';*/
            }
            
            ?>
            </table>
        </body>
        
        