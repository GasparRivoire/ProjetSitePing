<?php
$Page = "sujets.php";
$fe = "téléchargement.jfif";
include 'Header.php';
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
    $titre = $tuple['nom'];
    $desc = $tuple['desc'];
}

// Vérifiez si l'utilisateur est connecté
if (isset($_SESSION['Id'])) {
    $utilisateur_id =$_SESSION['Id'];

    // Vérifiez si l'utilisateur n'est pas déjà positionné sur ce sujet
    $verifRequete = "SELECT * FROM user_sujet WHERE user_id = $utilisateur_id AND sujet_id = $sujet";
    $verifResultat = $mysqli->query($verifRequete);

    if (!$verifResultat) {
        die("Erreur de vérification !");
    } elseif ($verifResultat->num_rows == 0) {
        // L'utilisateur n'est pas déjà positionné, insérez dans user_sujet
        $insertRequete = "INSERT INTO user_sujet (user_id, sujet_id) VALUES ($utilisateur_id, $sujet)";
        $insertResultat = $mysqli->query($insertRequete);

        if (!$insertResultat) {
            die("Erreur lors de l'insertion !");
        }
    } else {
        // L'utilisateur est déjà positionné
        $_SESSION['erreur'] = "Vous êtes déjà positionné sur ce sujet.";
    }
}

$mysqli->close();
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
                <button onclick="window.location.href = 'positionne.php?sujet=<?php echo $sujet; ?>'">Se positionner sur ce sujet</button>
            </div>
            <div class="col">
                <button onclick="window.location.href = 'plus_positionne.php?sujet=<?php echo $sujet; ?>'">Ne plus se positionner sur ce sujet</button>
            </div>
        </div>
        <hr>

    </div>

</body>
