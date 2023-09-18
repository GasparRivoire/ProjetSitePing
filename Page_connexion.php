<?php 

$titre = "Page de connexion";
include 'C:\UwAmp\www\creation-site-internet-ping\Header.php';
include 'C:\UwAmp\www\creation-site-internet-ping\retour.php';

?>
<body>
    <h2>Connexion</h2>

    <div  align="center" class="row" >
        <form method="POST" action="connexion1.php">

            <label for="Email" class="form-label">Adresse email :</label>
            <input type="Email" type="form-control" id="Email" name="Email" placeholder="Votre email..." required>
            <br>
            <label for="Mdp" class="form-label">Mot de passe :</label>
            <input type="password" type="form-control" id="Mdp" name="Mdp" placeholder="Votre Mot de passe..." required>
            <br>
            <br>
            <button class="btn btn-primary" type="submit">Connexion</button>

        </form>
    </div>

    </body>
