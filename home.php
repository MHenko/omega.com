<?php // Connexion à la base de données
$pdo = new PDO('mysql:host=localhost;dbname=alpha;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="./image/favicon/favicon.png" />


    <?php include('./includes/styles.php') ?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/anime.css">


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

  <div class="col-12 box">
      
      <?php

        $result = $pdo->query(" SELECT * FROM wear ");

        $listeWears = $result->fetchAll(PDO::FETCH_ASSOC);

        shuffle($listeWears);

        foreach($listeWears as $key => $wear) {
          if($key < 3) { ?>


       <figure class="col-12 col-lg-4 text-center">
          <img src="<?php echo $wear["photo"]; ?>" alt="panier">
      </figure>

        <?php  } ?>
        <?php  } ?>




      <div class="carton">
          <div class="boucle">
            <div class="defile">

              <div class="numero">
                <h4 class="dialogue">OMEGA TENDANCES.</h4>
                </div>

                <div class="numero">
                  <h4 class="dialogue">OMEGA TENDANCES.</h4>
                </div>

                <div class="numero">
                  <h4 class="dialogue">OMEGA TENDANCES.</h4>
                </div>

                <div class="numero">
                  <h4 class="dialogue">OMEGA TENDANCES.</h4>
                </div>

                <div class="numero">
                  <h4 class="dialogue">OMEGA TENDANCES.</h4>
                </div>

                <div class="numero">
                  <h4 class="dialogue">OMEGA TENDANCES.</h4>
                </div>
                         
                <div class="numero">
                  <h4 class="dialogue">OMEGA TENDANCES.</h4>
                </div>

              </div>
          </div>
      </div>

      <div class="back">
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

      <div class="col-12 col-sm-1 text-center">
        <a href="./accessoire.php">ACCESSOIRES</a>
      </div>

      <div class="col-12 col-sm-1 text-center"></div>

      <div class="col-12 col-sm-1 text-center">
        <a href="#"><img src="./image/svg/arrow.svg" alt="fleche" ></a>
      </div>
    </div>
</footer>

    </div>
  </div>
  </body>
</html>