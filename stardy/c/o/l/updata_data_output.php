<!DOCTYPE html>
<html>
    <head>
        <meta charset utf-8>
    </head>
    <body>
        <?php
        
        $pdo=new PDO('mysql:host=localhost;dbname=Arsenal;charset=utf8','Big_boss','password');
        $sql=$pdo->prepare('update light_weapons set name = ?, price = ?,where id = ?');

        if(empty($_REQUEST['name']))echo "商品名稱不可為空白";
        else if (!preg_match('/[0-9]+/',$_REQUEST['price'])) echo'價格格式錯誤';
        else if ($sql->execute([$_REQUEST['name'],$_REQUEST['price'],$_REQUEST['id']])) echo '新增成功';
        else echo '修改失敗';
        
        ?>
    </body>
</html>