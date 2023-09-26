<?php
  session_start(); // Pour les massages

  // Contenu du formulaire :
  $nom =  htmlentities($_POST['Nom']);
  $prenom = htmlentities($_POST['Prénom']);
  $email =  htmlentities($_POST['Email']);
  $password = htmlentities($_POST['Mdp']);
  $type = 1; // 1 pour tuteur, 2 pour responsable PING, 3 pour admin par exemple :o)

  // Option pour bcrypt (voir le lien du cours vers le site de PHP) :
  $options = [
        'cost' => 12,
  ];
  // On crypte le mot de passe
  // $password_crypt = password_hash($password, PASSWORD_BCRYPT, $options);

  // Connexion :
  require_once("param.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }
 


  // A FAIRE : Attention, ici on ne vérifie pas si l'utilisateur existe déjà
  // Il faut ajouter cette vérification !!!
  if ($stmt = $mysqli->prepare("INSERT INTO user(Nom, Prénom, Email, Mdp, Type) VALUES (?, ?, ?, ?, ?)")) {
    
    $password = password_hash($password, PASSWORD_BCRYPT, $options);
    $stmt->bind_param("ssssi", $nom, $prenom, $email, $password, $type);
   

    // Le message est mis dans la session, il est préférable de séparer message normal et message d'erreur.
    if($stmt->execute()) {
        // Requête exécutée correctement 
        
        $_SESSION['message'] = "Enregistrement réussi";

    } else {
        // Il y a eu une erreur
        $_SESSION['erreur'] =  "Impossible d'enregistrer";
    }
  }
  // Redirection vers la page d'accueil par exemple :
  //header('Location: index.php');


?>