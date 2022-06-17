<?php require 'header.php';
    require 'menu.php';

    session_start();
    if(isset($_SESSION['customer'])){
        $pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff','password');
        $spl=$pdo->prepare('insert into favorite valuse(?,?)');
        $spl->execute([$_SESSION['customer']['id'],$_REQUEST['id']]);
        echo '成功加入';

        echo'</hr>';
        require 'favorite.php';
    }
        else echo "請先將商品加入我的最愛或登入帳號";

    require 'footer.php';?>