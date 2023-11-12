<?php
  session_start();

  
  $nom =  htmlentities($_POST['Nom']);
  $prenom = htmlentities($_POST['Prenom']);
  $email =  htmlentities($_POST['Email']);
  $password = htmlentities($_POST['Mdp']);
  $type = 1; 

  
  $options = [
        'cost' => 12,
  ];
  

 
  require_once("param.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }
 



  if ($stmt = $mysqli->prepare("INSERT INTO user(Nom, Prenom, Email, Mdp, Type) VALUES (?, ?, ?, ?, ?)")) {
    
    $password = password_hash($password, PASSWORD_BCRYPT, $options);
    $stmt->bind_param("ssssi", $nom, $prenom, $email, $password, $type);
   


    if($stmt->execute()) {

        
        $_SESSION['message'] = "Enregistrement réussi";
        header('Location: index.php');

    } else {

        $_SESSION['erreur'] =  "Impossible d'enregistrer";
    }
    

  }
  
  


?>