<?php // Connexion à la base de données
$pdo = new PDO('mysql:host=localhost;dbname=alpha;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));


 if($_POST && ! isset($_POST['delete'])) {
     $showdeleteInfo = true;
        // Requêtes SQL pour insérer une nouvelle ligne dans la base de données
        $result = $pdo->prepare('INSERT INTO wear (type, nom, prix, description, matiere, photo) VALUES (:type, :nom, :prix, :description, :matiere, :photo)');
        // On remplace les éléments préparés par les données envoyées par le formulaire
        $result->execute(array(
          'type' => $_POST['type'],
          'nom' => $_POST['nom'],
          'prix' => $_POST['prix'],
          'description' => $_POST['description'],
          'matiere' => $_POST['matiere'],
          'photo' => $photoPath
        ));
  ?>
        
    
    
  <?php
  }
  ?>

<! doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="./image/favicon/favicon.png" />

    <?php include('./includes/styles.php') ?>
    <link rel="stylesheet" href="css/adminwear.css">


    <title>Omega e-commerce</title>
  </head>
  <body>

  <div class="col-12">
     <div class="deleted-info">L'article a bien été supprimé</div>
    <div class="row">

       <?php
        // Requêtes SQL pour récupérer toutes les lignes d'une table de la base de données
        $result = $pdo->query("SELECT * FROM wear");
        // Boucle pour lister les résultats de la requête précédente
        while($listeWears = $result->fetch(PDO::FETCH_ASSOC)){ ?>

        <figure class="col-12 col-lg-2">
          <form class="article" method="post" action="adminwear.php">

            <input type="image" src="image/svg/trash.svg" class="trash">
            <input type="hidden" name="delete" value="<?php echo $listeWears['id'] ?>">


            <img src="<?php echo $listeWears["photo"]; ?>" alt="t-shirt">
            <figcaption>
              <h5 class="impact text-center"><?php echo $listeWears["type"]; ?></h5>
              <h5 class="impact text-center"><?php echo $listeWears["nom"]; ?></h5>
              <h5 class="impact text-center"><?php echo $listeWears["prix"]; ?></h5>
            </figcaption>  
        </figure>
    </form>
      <?php  
      } 
      ?>
    </div>
  </div>


<footer>
   <div class="row">
      <div class="col-12 col-sm-1 text-center">
        <a href="./home.php">
          <img src="./image/logo/omega.png" alt="logo">
        </a>
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
        <a class="scroll-top" href="#"><img src="./image/svg/arrow.svg" alt="fleche" ></a>
      </div>
    </div>
</footer>


    </div>
        <?php
    if(isset($_POST["delete"]) && !empty($_POST['delete'])) {
      // Requêtes SQL qui supprime une ligne en base en lui passant l'id de l'article
      $result = $pdo->prepare('DELETE FROM wear WHERE id = :id');
      // On execute la requête en précisant que l'ID est celui passé en URL
      $result->execute(array('id' => $_POST["delete"]));
      ?>

      <script>
      let deleteInfo = document.querySelector('.deleted-info');
      deleteInfo.classList.add('show');
      setTimeout(function() {
        deleteInfo.classList.remove('show');
      }, 4000);
      </script>

      <?php
    }
    ?>

  </body>
</html>