<?php
    session_start();

    $Email =  htmlentities($_POST['Email']);
    $Mdp = htmlentities($_POST['Mdp']);

    
    require_once("param.php");
    
    // Connexion à la BDD
    $mysqli = new mysqli($host, $login, $passwd, $dbname);
    if ($mysqli->connect_error) {
        die('Erreur de connexion (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
    }

  // Attention, ici on ne vérifie pas si l'utilisateur existe déjà
  $requete = "SELECT * FROM utilisateur WHERE Email='$Email'";
  $resultat = $mysqli->query($requete);
  if (!$resultat) {
    // Erreur avec la requête
    die ("Echec !");
  } elseif ($resultat->num_rows == 0) {
    // Requête OK, mais l'Email n'a pas été trouvé (0 tuple)
    $_SESSION['erreur'] = "Erreur de connexion";
  } else {
    // On a trouvé un utilisateur avec la bonne adresse Email :
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