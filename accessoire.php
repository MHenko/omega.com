<?php // Connexion à la base de données
$pdo = new PDO('mysql:host=http://omega.orgfree.com;dbname=315842;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="./image/favicon/favicon.png" />

   <?php include('./includes/styles.php') ?>
    <link rel="stylesheet" href="css/wear.css">


    <title>Omega e-commerce</title>
  </head>
  <body>

<div class="container-fluid">
       <ul class="navbar-nav col-12 col-1">

          <li>
            <div class="omega1 text-center">
              <a href="./home.php">
                <img src="./image/logo/omega.png" alt="logo">
              </a>
            </div>
          </li>

          <li class="nav-item text-center">
            <a class="nav-link" href="#">NOUVEAUTE</a>
          </li>

          <li class="nav-item text-center">
            <a class="nav-link" href="#">HOMME</a>
          </li>

          <li class="nav-item text-center">
            <a class="nav-link" href="#">FEMME</a>
          </li>

           <li class="nav-item">
            <a class="icone" href="#"><img src="./image/svg/search.svg" alt="recherche"></a>
          </li>

           <li class="nav-item">
              <a class="icone" href="connexion.php"><img src="./image/svg/user.svg" alt="compte" ></a>
          </li>

           <li class="nav-item text-center">
            <a class="icone" href="#"><img src="./image/svg/bag.svg" alt="panier"></a>
          </li>
        </ul>
    </div>

  <div class="col-12">
    <div class="row">
         <?php
        // Requêtes SQL pour récupérer toutes les lignes d'une table de la base de données
        $result = $pdo->query("SELECT * FROM wear where type = 'ACCESSOIRE'");
        // Boucle pour lister les résultats de la requête précédente
        while($listeWears = $result->fetch(PDO::FETCH_ASSOC))

        { 
      ?>

       <figure class="col-12 col-lg-2">

        <form class="article" method="get" action="article.php">
          <a href="./article.php?id=<?php echo $listeWears["id"]; ?>" type="submit" id="<?php echo $listeWears["id"]; ?>">

            <img src="<?php echo $listeWears["photo"]; ?>" alt="accessoire">
            <figcaption>
              <h5 class="impact text-center"><?php echo $listeWears["type"]; ?></h5>
              <h5 class="impact text-center"><?php echo $listeWears["nom"]; ?></h5>
              <h5 class="impact text-center"><?php echo $listeWears["prix"]; ?></h5>
            </figcaption>  
          </a>
        </form>
        </figure>

      <?php  
      } 
      ?>
  </div>
</div>


<footer>
    <div class="row">
      <div class="col-12 col-sm-1 text-center white">
          <a href="./admin.php"> Admin</a>
      </div>

      <div class="col-12 col-sm-1 text-center">
        <a href="./tshirt.php">T-SHIRTS</a>
      </div>

      <div class="col-12 col-sm-1 text-center">
        <a href="./chemise.php">CHEMISES</a>
      </div>

      <div class="col-12 col-sm-1 text-center">
        <a href="./sweat.php">SWEAT</a>
      </div>

      <div class="col-12 col-sm-1 text-center">
        <a href="./veste.php">VESTES</a>
      </div>

      <div class="col-12 col-sm-1 text-center">
        <a href="./manteau.php">MANTEAUX</a>
      </div>

      <div class="col-12 col-sm-1 text-center">
        <a href="./pantalon.php">PANTALONS</a>
      </div>

      <div class="col-12 col-sm-1 text-center">
        <a href="./chaussure.php">CHAUSSURES</a>
      </div>

      <div class="col-12 col-sm-1 text-center">
        <a href="./sac.php">SACS</a>
      </div>

      <div class="col-12 col-sm-1 text-center cyan">
        <a href="./accessoire.php">ACCESSOIRES</a>
      </div>

      <div class="col-12 col-sm-1 text-center"></div>

      <div class="col-12 col-sm-1 text-center">
        <a href="#"><img src="./image/svg/arrow.svg" alt="fleche" ></a>
      </div>
    </div>
</footer>

    </div>

        <script src="./js/test.js"></script>
  </body>
</html>