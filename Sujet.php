<?php
$titre = "Titres des sujets";
$Page = "sujets.php";
$fe = "téléchargement.jfif";
include 'Header.php';
include 'retour.php';
$sujet = $_GET['sujet'];
session_start();
require_once("param.php");

$mysqli = new mysqli($host, $login, $passwd, $dbname);
if ($mysqli->connect_error) {
    die('Erreur de connexion (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$requete = "SELECT * FROM sujets WHERE id = $sujet";
$resultat = $mysqli->query($requete);
if (!$resultat) {
    die("Echec !");
} elseif ($resultat->num_rows == 0) {
    $_SESSION['erreur'] = "Erreur de connexion";
} else {
    // Utilisez $sujet pour récupérer les données
    $tuple = $resultat->fetch_assoc();
    $titre = $tuple['nom']; // utilisez 'nom' au lieu de $_SESSION['nom']
    $desc = $tuple['desc']; // utilisez 'desc' au lieu de $_SESSION['desc']
}
?>
<body background="abc.jpg" style="background-size:cover;">

    <div align="center">
        <img src="1586606829_Esigelec.png" class="rounded mx-auto d-block" alt="Logo ESIGELEC">
    </div>
    <br>
    <br>
    <br>
    <br>
    <div align="center" class="container background-container p-0">
        <hr>
        <div class="row">
            <div class="col">Titre projet : <?php echo $titre ?></div>
        </div>
        <hr>
        <div class="row">
            <div class="col">Description projet : <?php echo $desc ?></div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <button onclick="window.location.href = 'positionner.php?sujet=<?php echo $sujet; ?>'">Modifier son positionnement</button>

            </div>
        </div>
        <hr>

    </div>

</body>
