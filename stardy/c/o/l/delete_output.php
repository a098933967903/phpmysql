<!DOCTYPE html>
<html>
    <head>
        <mata charset utf-8>
    </head>
    <body>             
            <?php
            $pdo=new PDO('mysql:host=localhost;dbname=Arsenal;charset=utf8','Big_boss','password');
            $sql=$pdo->prepare('delete from light_weapons where id = ?');
            if($sql->execute([$_REQUEST['id']]))echo 'delete success';
            else echo 'delete fail';
            
            ?>
    </body>
</html>