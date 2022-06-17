<!DOCTYPE html>
<html>
    <head>
        <meta charset utf8>
        
    </head>
    <body>
        <?php
        $pdo=new PDO('mysql:host=localhost;dbname=Arsenal;charset=utf8','Big_boss','password');
        $sql=$pdo->prepare('insert into light_weapons values(null,?,?)');
        if(empty($_REQUEST['name'])){
            echo '請輸入值';
        }
        else if(!preg_match('/[0-9]+/',$_REQUEST['price']))
            echo '輸入不合格式';
        
        else if($sql->execute([htmlspecialchars($_REQUEST['name']),$_REQUEST['price']])){ //過濾掉REQUEST['NAME'] 
            echo "新增成功";
        }
        else {
            echo "失敗";
        }
        ?>
    </body>
</html>