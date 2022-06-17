<!DOCTYPE html>
<html>
    <head>
        <meta charset utf-8>
    </head>
    <table>
        <tr><th>id</th><th>weapon</th><th>price</th></tr>
    <body>
        <?php
        $pdo=new PDO('mysql:host=localhost;dbname=Arsenal;charset=utf8','Big_boss','password');
        if(isset($_REQUEST['commend'])){
            switch($_REQUEST['commend']){
                case "insert": 
                    if(empty($_REQUEST['name'])||preg_match('/[0-9]/',$_REQUEST['price']))break;

                $sql=$pdo->prepare('insert into light_weapons value=(null,?,?');
                if($sql->execute([htmlspecialchars($_REQUEST['name']),$_REQUEST["price"]])){
                    echo "create success";
                    break;
                }
                else echo "fails_1";
                    
                

                case "update":
                    if(empty($_REQUEST['name'])||preg_match('/[0-9]/',$_REQUEST['price']))break;
                    $sql=$pdo->prepare('updata light_weapons set name=? price=?');
                    if($sql->execute([htmlspecialchars($_REQUEST['name']),$_REQUEST['price']])){
                        echo "update success";
                        break;
                    }
                else echo"fails_2";
                        break;

                case "delete":
                    $sql=$pdo->prepare('delete from light_weapons where id=?');
                    if($sql->execute([$_REQUEST['id']])) {
                        echo "delete success";
                        break;
                    }
                    else echo "fails_3";
                break;

            }

        }
        else echo "meow";

        foreach($pdo->query('select * from light_weapons') as $row){
            echo '<tr>';
            echo '<form action="k_data_change_delete.php" method="post">';
            echo '<input type="hidden" name="commend" value="update">';

            echo '<input type="hidden" name="id" value="',$row['id'],'">';
            echo "<td>$row[id]</td>";

            echo '<td><input type="text" name="name" value="',$row['name'],'"></td>';
        
            echo '<td><input type="text" name="price" value="',$row['price'],'"></td>';

            echo '<td><input type="submit" value="modifly"></td>';

            echo "</form>";
            
            echo '<form action="k_data_change_delete.php" method="post>';
            echo '<input type="hidden" name="commend" value="delete">';
            echo '<input type="hidden" name="id" value="',$row['id'],'">';
            echo '<td><input type="submit" value="delete"></td>';
            echo "</form>";
            echo '</tr>';         
        }
        ?>
        <tr>
            <form action="k_data_change_delete.php" method="post">
            <td><input type="hidden" name="commend" value="insert">
            
            <td><input type="text" name="name"></td>
            <td><input type="text" name="price"></td>

            <td><input type="submit" value=確認></td>
            </form>
        </tr>


    </body>
    </table>
</html>