<?php
session_start();

$titreSujet = filter_var($_POST['TitreSujet'], FILTER_SANITIZE_STRING);
$descSujet = filter_var($_POST['DescSujet'], FILTER_SANITIZE_STRING);

require_once("param.php");
$mysqli = new mysqli($host, $login, $passwd, $dbname);

if ($mysqli->connect_error) {
    die('Erreur de connexion (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$stmt = $mysqli->prepare("INSERT INTO sujets(nom, `desc`) VALUES (?, ?)");

if ($stmt === false) {
    die('Erreur de préparation de la requête : ' . $mysqli->error);
}

$stmt->bind_param("ss", $titreSujet, $descSujet);

if ($stmt->execute()) {
    $_SESSION['message'] = "Enregistrement du sujet réussi";
    header('Location: commissionPing.php');
    exit;
} else {
    $_SESSION['erreur'] = "Impossible d'enregistrer le sujet. Erreur SQL : " . $stmt->error;
    error_log("Erreur SQL lors de l'insertion dans la table sujets : " . $stmt->error);
}

$stmt->close();
$mysqli->close();
?>
