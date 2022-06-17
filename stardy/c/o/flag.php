<html>
<meta charset='UTF-8'>
$a1=$_REQUEST['answer1'];
$c='答對';
$e='答錯哈哈';
$A1=md5('MEOW');
$x=$a1;
$A2 =md5($x);
	if(isset($x)){
		if($A1 != $x && $A1==$A2){
			echo '<p>********:','**</p>','<p>********:','*****</p>','<p>********:','****</p>','<p>*****:','********</p>';
		}
		else{
			echo $e;
		}
</html>