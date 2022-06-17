<?php
    require 'header.php';
    require 'menu.php';

    session_start();
    unset($_SESSION['costomer']);
    $pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff','password');
    $sql=$pdo->prepare('select * from customer where login=? and password=?');
    $sql->execute([$_REQUEST['login'],$_REQUEST['password']]);

    foreach($sql->fetchAll() as $row){
        $_SESSION['customer']=[
            'id'=>$row['id'],
            'name'=>$row['name'],
            'address'=>$row['address'],
            'login'=>$row['login'],
            'password'=>$row['password']
        ];
    }
    if(isset($_SESSION['customer']))echo 'yo',$_SESSION['customer']['name'],',還來買東西啊？';
    else echo '帳號或密碼錯誤';

    require 'footer.php';
?>
    


