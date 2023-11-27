<?php
session_start();
if(!isset($_SESSION['log'])|| $_SESSION['log']!='admin'){
    header("location:login.php?error=2");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<a href="page2.php">lien vers page2</a>
    <a href="page3.php">lien vers page3</a>
    <a href="page4.php">lien vers page4</a>
    <a href="logout.php">logout</a>
    <?php
    echo "<h1>bienvenu" .$_SESSION['log']. "</h1>";
    ?>
        <h3>les informations confidentielles de cette page 3</h3>

</body>
</html>