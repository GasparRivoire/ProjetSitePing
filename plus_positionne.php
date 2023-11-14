<?php 
    $titre = "Titres des sujets";
    $Page = "sujets.php";
    $fe = "téléchargement.jfif";
    include 'Header.php';
    include 'retour.php';
    session_start();
    require_once("param.php");

    // Vérifiez si l'utilisateur est connecté
    if (isset($_SESSION['Id'])) {
        $utilisateur_id = $_SESSION['Id'];

        // Vérifiez si l'ID du sujet est passé en paramètre
        if (isset($_GET['sujet'])) {
            $sujet_id = $_GET['sujet'];

            // Connexion à la base de données
            $mysqli = new mysqli($host, $login, $passwd, $dbname);
            if ($mysqli->connect_error) {
                die('Erreur de connexion (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
            }

            // Requête pour supprimer la ligne de user_sujet
            $deleteRequete = "DELETE FROM user_sujet WHERE user_id = $utilisateur_id AND sujet_id = $sujet_id";
            $deleteResultat = $mysqli->query($deleteRequete);

            // Vérifiez si la requête a réussi
            if ($deleteResultat) {
                echo "Suppression réussie.";
            } else {
                echo "Erreur lors de la suppression : " . $mysqli->error;
            }

            // Fermer la connexion à la base de données
            $mysqli->close();
        } else {
            echo "ID du sujet non spécifié.";
        }
    } else {
        echo "Utilisateur non connecté.";
    }
?>
<body background="abc.jpg" style="background-size:cover;">
    <div align="center">
        <img src="1586606829_Esigelec.png" class="rounded mx-auto d-block" alt="Logo ESIGELEC">
    </div>
            <br>
            <br>
            <br>
     
            
     <div align="center" class="container background-container p-0">
          <hr>          
        Vous n'êtes pas ou plus positionné sur ce sujet !
<hr>
        <button onclick="window.location.href = 'sujets.php'">
            Retourner à la liste des sujets
        </button>
        <hr>

    </div>
        

</body>
    
