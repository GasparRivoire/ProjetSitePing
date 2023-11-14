<?php
$titre = "Titres des sujets";
$Page = "sujetsPing.php";
$fe = "téléchargement.jfif";
include 'Header.php';
include 'retour.php';

session_start();
require_once("param.php");

// Vérifiez si l'ID du sujet est défini dans l'URL
if (isset($_GET['sujet'])) {
    $sujet = $_GET['sujet'];

    $mysqli = new mysqli($host, $login, $passwd, $dbname);

    if ($mysqli->connect_error) {
        die('Erreur de connexion (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }

    // Utilisez des requêtes préparées pour éviter les attaques par injection SQL
    $requete = $mysqli->prepare("UPDATE user_sujet SET valide = 1 WHERE sujet_id = ?");
    $requete->bind_param("i", $sujet); // "i" indique que c'est un entier (integer)

    // Exécutez la requête préparée
    if ($requete->execute()) {
        echo "Mise à jour réussie !";
    } else {
        echo "Echec de la mise à jour !";
    }

    $requete->close();
    $mysqli->close();
} else {
    $_SESSION['erreur'] = "ID de sujet non défini.";
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
        Vous avez validé ce sujet pour cet eleve !
        <hr>
        <button onclick="window.location.href = 'sujetsPing.php'">
            Retourner à la liste des sujets
        </button>
        <hr>
    </div>
</body>
