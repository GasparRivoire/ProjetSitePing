<?php
    $titre = "Titres des sujets";
    $Page = "sujetsPing.php";
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

    $requete = "SELECT user.Nom, user.Prenom
                FROM user
                INNER JOIN user_sujet ON user.id = user_sujet.user_id
                WHERE user_sujet.sujet_id = $sujet";

    $resultat = $mysqli->query($requete);
    
    if (!$resultat) {
        die("Echec !");
    } elseif ($resultat->num_rows == 0) {
        $_SESSION['erreur'] = "Aucun élève inscrit à ce sujet.";
    } else {
        // Utilisez $sujet pour récupérer les données
        $listeEleve = array(); // Initialisez la variable $listeEleve comme un tableau vide

        while ($eleve = $resultat->fetch_assoc()) {
            $listeEleve[] = $eleve;
        }
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
            <?php
                if (!empty($listeEleve)) {
                    foreach ($listeEleve as $index => $eleve) {
                        echo "<hr>
                            <div class='row'>
                                <div class='col-10' align='left'>
                                    Nom : {$eleve['Nom']} | Prénom : {$eleve['Prenom']}
                                </div> 
                            </div>
                            <hr>";
                    }
                } else {
                    echo "<p>Aucun élève inscrit à ce sujet.</p>";
                }
            ?>
        </div>
        <hr>

        <div class="row">
            <div class="col">
                <button onclick="window.location.href = 'valider.php?sujet=<?php echo $sujet; ?>'">Valider</button>
            </div>
            <div class="col">
                <button onclick="window.location.href = 'invalider.php?sujet=<?php echo $sujet; ?>'">Invalider</button>
            </div>
        </div>
        <hr>
    </div>
</body>
