<?php
    session_start();

    $Email =  htmlentities($_POST['Email']);
    $Mdp = htmlentities($_POST['Mdp']);

    
    require_once("param.php");
    
   
    $mysqli = new mysqli($host, $login, $passwd, $dbname);
    if ($mysqli->connect_error) {
        die('Erreur de connexion (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
    }


  $requete = "SELECT * FROM user WHERE Email='$Email'";
  $resultat = $mysqli->query($requete);
  if (!$resultat) {

    die ("Echec !");
  } elseif ($resultat->num_rows == 0) {

    $_SESSION['erreur'] = "Erreur de connexion";
  } else {
 
    $tuple = $resultat->fetch_assoc();

    if ($Mdp == $tuple['Mdp']) {
      // if (password_verify($Mdp, $tuple['Mdp'])) {

      $_SESSION['message'] = "Connexion réussie";
      $_SESSION['login'] = $tuple['Prénom'];
      $_SESSION['role'] = $tuple['Type'];
      header('Location: eleve.php');
    }
    else 
        $_SESSION['erreur'] = "Erreur de connexion";
        
  }
  

?>