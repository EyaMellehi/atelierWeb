<?php
ob_start();
echo "<h1>Liste des produits</h1>";
echo "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur error quidem id ipsa sed harum corrupti modi necessitatibus quae. Dignissimos ea hic iure velit nihil. Modi exercitationem optio hic quod.";
$contenu=ob_get_clean();
include "layout.php";
?>