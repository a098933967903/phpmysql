<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <table>
        <tr>
            <th>編號</th><th>武器</th><th>價格</th>
        </tr>

    <?php
    
    $pdo=new PDO('mysql:host=localhost;dbname=Arsenal;charset=utf8','Big_boss','password');
    
    $sql=$pdo->prepare(select * from Light_weapons where name=?);
    $sql->execute($Request["keyword"]);
    foreach($pdo->fetchAll() as $row){
        echo "<tr><td>$row[id]</td><td>$row[name]</td><td>$row[price]</td></tr>";
    }
    ?> 
    </table>
</body>
</html>