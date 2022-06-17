
<?php/* require 'header.php';
      require 'menu.php';

    session_start();
    $pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff','password');

    if(isset($_SESSION['customer'])){   //有登入session
        $id=$_SESSION['customr']['id'];

        $sql=$pod->prepare('select * from customer where id!=? and login=?');
        $spl->execute([$_REQUEST['id'],$_REQUEST['loginin']]);
        }
    else {
        $sql=$pdo->prepare('select * from customer where longin=?');
        $sql->execute([$_REQUEST['login']]);
    }

        if(empty($sql->fetchAll())){
            if(isset($_SESSION['customer'])){
                $sql->prepare('update customer set name=?,address=?,login=?,password=? where id=?');
                $sql->execute([$_REQUEST['name'],$_REQUEST['address'],$_REQUEST['login'],$_REQUEST['password'],$id]);

                $_SESSION['customer']=[
                    'id'=>$id, 'name'=>$_REQUEST['address'],
                    'address'=>$_REQUEST['address'],'login'=>$_REQUEST['login'],
                    'password'=>$_REQUEST['password']
                ];
                echo '資料修改完成';
            }
            else{
                $sql->prepare('insert into custmoer values=(null,?,?,?,?)');
                $sql->execute([$_REQUEST['name'],$_REQUEST['address'],$_REQUEST['login'],$_REQUEST['password'],$id]);
                echo '資料新增完成';
            }
        }
        else {
            echo '登入id 被使用';
        }

require 'footer.php';?>
*/
<?php require '../header.php'; ?>
<?php require 'menu.php'; ?>
<?php
session_start();
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 
	'staff', 'password');
if (isset($_SESSION['customer'])) {
	$id=$_SESSION['customer']['id'];
	$sql=$pdo->prepare('select * from customer where id!=? and login=?');
	$sql->execute([$id, $_REQUEST['login']]);
} else {
	$sql=$pdo->prepare('select * from customer where login=?');
	$sql->execute([$_REQUEST['login']]);
}
if (empty($sql->fetchAll())) {
	if (isset($_SESSION['customer'])) {
		$sql=$pdo->prepare('update customer set name=?, address=?, '.
			'login=?, password=? where id=?');
		$sql->execute([
			$_REQUEST['name'], $_REQUEST['address'], 
			$_REQUEST['login'], $_REQUEST['password'], $id]);
		$_SESSION['customer']=[
			'id'=>$id, 'name'=>$_REQUEST['name'], 
			'address'=>$_REQUEST['address'], 'login'=>$_REQUEST['login'], 
			'password'=>$_REQUEST['password']];
		echo '客戶資料修改完成。';
	} else {
		$sql=$pdo->prepare('insert into customer values(null,?,?,?,?)');
		$sql->execute([
			$_REQUEST['name'], $_REQUEST['address'], 
			$_REQUEST['login'], $_REQUEST['password']]);
		echo '客戶資料新增完成。';
	}
} else {
	echo '登入ID已被使用，請重新設定。';
}
?>
<?php require '../footer.php'; ?>




























require 'foot.php' ?>