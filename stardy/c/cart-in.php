<?php require 'header.php';
    require 'menu.php';

    session_start();
    $id=$_REQUEST['id'];

    if(!isset($_SESSION['product'])) $_SESSION['product']=[];

    $count=0;
    if(isset($_SESSION['product'][$id])) $count=$_SESSION['product'][$id]['count'];
    
    $_SESSION['product'][$id]=[
        'name'=>$_REQUEST['name'],
        'price'=>$_REQUEST['price'],
        'count'=>$_REQUEST['count']+$count //累加重複商品數量
    ];
    echo "<p>放入成功</p>";
    echo '<hr>';

    require 'cart.php';

    require 'footer.php';
?>