
<?php
    require 'header.php';
    require '../menu.php';
?>  
    
    <form action="longin_output.php" method="post">
    <p>account:<input type="text" name="login"></p>
    password:<input type="password" name="password">
    <input type="submit" value="long in">
    </form>
<?php
    require 'footer.php';
?>
