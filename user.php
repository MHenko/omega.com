
<?php 
//CONNEXION
  // Connexion à la base de données
  $pdo = new PDO('mysql:host=localhost;dbname=alpha;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

$erreurEmail ='';
  // Si le formulaire est envoyé
  if($_POST) {
    if (!empty($_POST['login'])) {
            if (filter_var($_POST['login'], FILTER_VALIDATE_EMAIL)) {
                
                if (strlen($_POST['password'])>8){
                     // Requêtes SQL pour insérer une nouvelle ligne dans la base de données
                $result = $pdo->prepare('INSERT INTO user (pseudo, login, password) VALUES (:pseudo, :login, :password)');
                // On remplace les éléments préparés par les données envoyées par le formulaire
                $result->execute(array(
                      'pseudo' => $_POST['pseudo'],
                      'login' => $_POST['login'],
                      'password' => password_hash($_POST['password'],
                        PASSWORD_DEFAULT)
                ));
                }
            }
        else {
                $erreurEmail = "L'adresse email '" . $_POST['login'] . "' est considérée comme invalide.<br>";
        }
        }
  } 

    

  

?>

<html>
  <head>
    <meta charset="utf-8">
    <title>User</title>
      </head>
  <body>
    <!-- Formulaire pour ajouter un article en base de données -->
    <form method="POST" action="">
      <label for="pseudo">Pseudo</label>
      <input type="text" id="pseudo" name="pseudo">

      <label for="login">Login</label>
        <?= $erreurEmail; ?>
      <input type="text" id="login" name="login">

      <label for="password">Password</label>
      <input id="password" name="password">

      <input type="submit">
    </form>
  </body>
</html>