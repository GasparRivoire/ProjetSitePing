<?php
session_start();

$titreSujet = htmlentities($_POST['TitreSujet']);
$descSujet = htmlentities($_POST['DescSujet']);

require_once("param.php");
$mysqli = new mysqli($host, $login, $passwd, $dbname);

if ($mysqli->connect_error) {
    die('Erreur de connexion (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

if ($stmt = $mysqli->prepare("INSERT INTO sujets(nom, description) VALUES (?, ?)")) {
    $stmt->bind_param("ss", $titreSujet, $descSujet);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Enregistrement du sujet réussi";
        header('Location: commissionPing.php');
    } else {
        $_SESSION['erreur'] = "Impossible d'enregistrer le sujet. Erreur SQL : " . $stmt->error;
    }

    $stmt->close();
}

$mysqli->close();
?>
