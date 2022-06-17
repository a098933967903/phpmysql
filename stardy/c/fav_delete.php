<?php require 'header.php';
    require 'menu.php';

    session_start();

    if(isset($_SESSION['customer'])){

        $pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff','password');
        $sql=$pdo->prepare('delete from favorite where customer_id=? and product_id=?');
        $sql->execute([$_SESSION['customer']['id'],$_REQUEST['id']]);
        echo 'data delete';
        echo '<hr>';
        
    }
    else echo '請先登入';

    require 'favorite.php';
    require 'footer.php';?>