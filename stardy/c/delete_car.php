<?php require 'header.php';
    require 'menu.php';

    session_start();
    unset($_SESSION['product'][$_REQUEST['id']]);
    echo 'products have been remove';

    echo '<hr>';
    require 'cart.php';
    require 'footer.php';?>