<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Acceuil
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="produits.php">Nos produit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Nos categorie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">contactez nous</a>
        </li>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i>Panier</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#" ><i class="fa fa-sign-in"></i>login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-sign-out"></i>logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
 <div class="container mt-3">
    <?php
    echo $contenu
    ?>
 </div>
</body>
</html>