<?php 
//CONNEXION
  // Connexion à la base de données
  $pdo = new PDO('mysql:host=localhost;dbname=alpha;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

    // Si le formulaire est envoyé
  if($_POST) {
      $result = $pdo->prepare('SELECT * FROM user WHERE login = :login');
      $result->execute(array(
            'login' => $_POST['login']
      ));
      $users = $result->fetchAll();

      // Si pas de user correspondant
      if(empty($users)) {
        echo "Login ou mot de passe éronné";
      } else {
        $connected_user = false;
        foreach ($users as $user) {
          // Si le MDP de la BDD vaut le MDP du formulaire
          if(password_verify($_POST['password'], $user['password'])) {
            // On rentre ici si un login et un MDP correspondent
            echo "User connecté";
            // On récupére le pseudo de l'utilisateur
            $connected_user = $user['pseudo'];
          }
        }

        // $connected_user contient false ou le pseudo
        if($connected_user) {
          // On rentre ici si le pseudo a été défini
          echo $connected_user;
        } else {
          echo "Login ou mot de passe éronné";
        }
      }
    }

    ?>

 <!DOCTYPE html>
<html>
    <head>
        <title>connexion</title>
        <link rel="icon" type="image/png" href="./image/favicon/favicon.png" />
        <link rel="stylesheet">
        <link href="css/connexion.css" rel="stylesheet">

    </head>
    <body>
    	<form class="Box" method="POST">

                <a href="./home.php">
                	<img src="./image/logo/omega.png" alt="logo">
              	</a>

                <h1>CONNEXION</h1>
                <input for="login" type="text" placeholder="login"  name="login">
                
                <input for="password" type="password" placeholder="Password"  name="password">
                
                <input type="submit" name="send" >
            </form>
    </body>
</html>