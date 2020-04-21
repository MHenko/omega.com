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
    <link rel="stylesheet" href="css/article.css">
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
            <a class="icone" href="#"><img src="./image/svg/user.svg" alt="compte" ></a>
          </li>

           <li class="nav-item text-center">
            <a class="icone" href="#"><img src="./image/svg/bag.svg" alt="panier"></a>
          </li>
        </ul>
    </div>


<div class="container-fluid">

     <?php
       $result = $pdo->query("SELECT * FROM wear WHERE id=$_GET[id]");
        while($listeWears = $result->fetch(PDO::FETCH_ASSOC)){

      ?>

     <figure class="col-12 col-lg-4 image">
        <img src="<?php echo $listeWears['photo']; ?>" alt="t-shirt">
      </figure>

      <div class="col-12 col-lg-8">
        <div class="col-12 col-1 text-center">
          <h1><?php echo $listeWears["nom"]; ?> - <?php echo $listeWears["type"]; ?></h1>
        </div>


      <div class="container-fluid">
        <div class="col-12 col-lg-4 text-center">
          <h3><?php echo $listeWears["prix"]; ?></h3>
        </div>

         <div class="col-12 col-lg-4 text-center">
          <h3> Quantité</h3>
        </div>

        <div class="col-12 col-lg-4 text-center">
          <h3> Couleur</h3>
        </div>

        <div class="col-12 col-1 text-center">
          <h3> <?php echo $listeWears["prix"]; ?></h3>
        </div>

        <div class="col-12 col-1 text-center">
          <h2><?php echo $listeWears["description"]; ?></h2>
        </div>

        <div class="contour">
          <div class="anime">
            <div class="groupe">
              <div class="ensemble">
                <h4 class="texte"><?php echo $listeWears["nom"]; ?> - <?php echo $listeWears["type"]; ?>.</h4>
                </div>

                <div class="ensemble">
                  <h4 class="texte"><?php echo $listeWears["nom"]; ?> - <?php echo $listeWears["type"]; ?>.</h4>
                </div>

                <div class="ensemble">
                  <h4 class="texte"><?php echo $listeWears["nom"]; ?> - <?php echo $listeWears["type"]; ?>.</h4>
                </div>

                <div class="ensemble">
                  <h4 class="texte"><?php echo $listeWears["nom"]; ?> - <?php echo $listeWears["type"]; ?>.</h4>
                </div>

                <div class="ensemble">
                  <h4 class="texte"><?php echo $listeWears["nom"]; ?> - <?php echo $listeWears["type"]; ?>.</h4>
                </div>

                <div class="ensemble">
                  <h4 class="texte"><?php echo $listeWears["nom"]; ?> - <?php echo $listeWears["type"]; ?>.</h4>
                </div>
                         
                <div class="ensemble">
                  <h4 class="texte"><?php echo $listeWears["nom"]; ?> - <?php echo $listeWears["type"]; ?>.</h4>

              
                </div>
              </div>
          </div>
      </div>
    <?php  
      } 
      ?>

        <div class="col-12 col-lg-6 text-center">
          <h3> Taille</h3>
        </div>

        <div class="col-12 col-lg-6 text-center hop">
            <h3> Ajouter au panier </h3>
        </div>

      </div>
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
        <a href="./chemise.html">CHEMISES</a>
      </div>

      <div class="col-12 col-sm-1 text-center">
        <a href="./sweat.html">SWEAT</a>
      </div>

      <div class="col-12 col-sm-1 text-center">
        <a href="./veste.html">VESTES</a>
      </div>

      <div class="col-12 col-sm-1 text-center">
        <a href="./manteau.html">MANTEAUX</a>
      </div>

      <div class="col-12 col-sm-1 text-center">
        <a href="./pantalon.html">PANTALONS</a>
      </div>

      <div class="col-12 col-sm-1 text-center">
        <a href="./chaussure.html">CHAUSSURES</a>
      </div>

      <div class="col-12 col-sm-1 text-center">
        <a href="./sac.html">SACS</a>
      </div>

      <div class="col-12 col-sm-1 text-center">
        <a href="./accessoire.html">ACCESSOIRES</a>
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