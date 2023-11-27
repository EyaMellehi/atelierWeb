<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tmo=["user1"=>"erg12","user2"=>"azerty","user3"=>"querty","user4"=>"abc123"];
    ?>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <select name="ch">
            <?php
            foreach($tmo as $key=>$value){
                echo"<option value=".$key.">".$key."</option>";
            }
            ?>
        </select>
        <input type="submit" value="afiicher mp" name="ok">
        
    </form>
    <?php
        if(isset($_POST["ok"])){
            $user=$_POST['ch'];
            echo"le mot de passe de ".$user." est ".$tmo[$user];
            }
        
        
        ?>
    
</body>
</html>
