<?php 
    $titre = "Page de connexion";
    $Page = "index.html";
    include 'Header.php';
?>

<body>
    <?php include 'retour.php'; ?>
    <br>
    <h2>Connexion</h2>
    <br>
    <div  styles="width: 8em;" align="center" class="row" >
        <form method="POST" action="connexion1.php">

            <label for="Email" class="form-label">Adresse email :</label>
            <input type="Email" type="form-control" id="Email" name="Email" placeholder="Votre email..." required>
            <br>
            <label for="Mdp" class="form-label">Mot de passe :</label>
            <input type="Mdp" type="form-control" id="Mdp" name="Mdp" placeholder="Votre Mot de passe..." required>
            <br>
            <br>
            <button class="btn btn-primary" type="submit">Connexion</button>

        </form>
    </div>

    </body>