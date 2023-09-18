<?php
    session_start();

    $email =  htmlentities($_POST['email']);
    $mdp = htmlentities($_POST['mdp']);

    
    require_once("param.php");
    
    // Connexion à la BDD
    $mysqli = new mysqli($host, $login, $passwd, $dbname);
    if ($mysqli->connect_error) {
        die('Erreur de connexion (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
    }

  // Attention, ici on ne vérifie pas si l'utilisateur existe déjà
  $requete = "SELECT * FROM utilisateur WHERE email='$email'";
  $resultat = $mysqli->query($requete);
  if (!$resultat) {
    // Erreur avec la requête
    die ("Echec !");
  } elseif ($resultat->num_rows == 0) {
    // Requête OK, mais l'email n'a pas été trouvé (0 tuple)
    $_SESSION['erreur'] = "Erreur de connexion";
  } else {
    // On a trouvé un utilisateur avec la bonne adresse email :
    $tuple = $resultat->fetch_assoc();
    // Vérification du mot de passe :
    if (password_verify($password, $tuple['password'])) {
      // Si le mot de passe est correct :
      $_SESSION['message'] = "Connexion réussie";
      $_SESSION['login'] = $tuple['prenom'];
      $_SESSION['role'] = $tuple['role'];
    }
    else // Sinon :
        $_SESSION['erreur'] = "Erreur de connexion";

  }
header('Location: index.php');
?>