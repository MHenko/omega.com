<?php // Connexion à la base de données

$showCreated = true;

$pdo = new PDO('mysql:host=localhost;dbname=alpha;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

  //vérifie si une image a été envoyée via le formulaire
  if (isset($_FILES['photo']) && !empty($_FILES['photo'])) {
    //remplace les caractères spéciaux du nom du fichier par un tiret
    $photoName = preg_replace( '/[^a-z0-9]+/', '-', strtolower( $_FILES['photo']['name'] ) );
    //défini le chemin d'enregistrement du fichier
    $photoPath = "images-articles/$photoName";
    //récupère le chemin d'enregistrement temporaire de l'image
    $tmpName = $_FILES['photo']['tmp_name'];
    //enregistre l'image dans le chemin $photoPath
    move_uploaded_file($tmpName, $photoPath);
  }

 if($_POST && ! isset($_POST['delete'])) {
     $showCreated = true;
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

<doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="./image/favicon/favicon.png" />

     <?php include('./includes/styles.php') ?>
    <link rel="stylesheet" href="css/admin.css">
   
    <title>Omega e-commerce</title>
  </head>
  <body>


<div class="container-fluid">
  <div class="created-info">L'article a bien été ajouté</div>

  <ul class=" navbar-nav col-12 col-lg-1">
    <li>
      <div class="omega1 text-center">
        <a href="./home.html">
        <img src="./image/logo/omega.png" alt="logo">
        </a>
      </div>
    </li>
  </ul>


    <div class="col-12 col-lg-10">
        <div class="col-12 col-1 text-center">
          <h3> ADMINISTRATEUR</h3>
        </div>


      <div class="container-fluid">

      <form method="POST" enctype="multipart/form-data">
          <label class="col-lg-6 text-center"> VETEMENT</label>
          <input  class="col-lg-6" type="text" name="type" >

          <label class="col-lg-6 text-center"> NOM</label>
          <input class="col-lg-6" type="text" name="nom" >

          <label class="col-lg-6 text-center">PRIX</label>
          <input class="col-lg-6" type="text" name="prix">

          <label class="col-lg-6 text-center"> COMPOSITION</label>
          <input class="col-lg-6" type="text" name="matiere">

         <label class="col-lg-6 text-center">IMAGE</label>
         <input class="col-lg-4" type="text" name="photo">

          <input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
          <button  class="col-lg-2 btn1" type="file" name="photo" accept="image/png, image/jpeg">AJOUT</button>

          <div class="col-lg-6 block">
            <label class="text-center"> DESCRIPTIF</label>
            <button type="submit" class="btn2">ENVOYEZ</button>
          </div>

          <input class="col-lg-6 word" type="text" name="description">

      </form>
    </div>
  </div>

    <div class=" col-12 col-lg-1 omega1 text-center">
      <a href="./home.html">
        <img src="./image/logo/omega.png" alt="logo">
      </a>
    </div>
</div>





<footer>
</footer>

  </div>
  </div>

  <?php
    if($showCreated) { ?>
        <script>
          let createdInfo = document.querySelector('.created-info');
          createdInfo.classList.add('show');
          setTimeout(function() {
            createdInfo.classList.remove('show');
          }, 4000);
        </script>
      
<?php } ?>
  </body>
</html>