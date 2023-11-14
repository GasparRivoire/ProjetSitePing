<?php
    session_start(); 
    require_once("param.php");
    
   
    $mysqli = new mysqli($host, $login, $passwd, $dbname);
    if ($mysqli->connect_error) {
        die('Erreur de connexion (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
    }

    
  $requete = "SELECT * FROM sujets WHERE id = $sujet";
  $resultat = $mysqli->query($requete);
  if (!$resultat) {

    die ("Echec !");
  } elseif ($resultat->num_rows == 0) {

    $_SESSION['erreur'] = "Erreur de connexion";
  } else {
 
    $titre = $_SESSION['nom'];
    $desc = $_SESSION['desc'];
}
?>