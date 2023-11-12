<!-- <?php
// session_start();

// require_once("param.php");

// $mysqli = new mysqli($host, $login, $passwd, $dbname);
//     if ($mysqli->connect_error) {
//         die('Erreur de connexion (' . $mysqli->connect_errno . ') '
//                 . $mysqli->connect_error);
//     }

// // Vérifiez la connexion
// if ($mysqli->connect_error) {
//     die('Erreur de connexion à la base de données (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
// }

// // Récupération de l'identifiant de l'élève depuis la session
// $utilisateur_id = $_SESSION['Id'];

// // Requête pour récupérer les informations de l'élève
// $requete = "SELECT * FROM user WHERE id = $utilisateur_id";
// $resultat = $mysqli->query($requete);

// // Vérifiez si la requête a réussi
// if ($resultat) {
//     // Récupérez les données de l'élève
//     $utilisateur = $resultat->fetch_assoc();

//     // Affichez les informations
//     $_SESSION['utilisateur_id'] = $utilisateur["Id"]; // Remplacez par l'ID de l'utilisateur
//     $_SESSION['Nom'] = $utilisateur["Nom"]; // Remplacez par le nom de l'utilisateur
//     $_SESSION['Prenom'] = $utilisateur["Prenom"]; // Remplacez par le prénom de l'utilisateur
//     var_dump($_SESSION);

// } else {
//     echo "Erreur lors de la récupération des informations de l'élève.";
// }

// // Fermez la connexion à la base de données
// $mysqli->close();
?> -->