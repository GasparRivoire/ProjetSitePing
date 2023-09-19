<?php 
    $titre = "Page de création de cours";
    $Page = "index.html";
    include 'Header.php';
?>

<?php include 'retour.php'; ?>

<div class="container">
        <form method="POST" action="connexion1.php">
        <h1>Inscription</h1>
            <div class="row my-3" >
                <div class="col-md-6">
                    <label for="Nom" class="form-label">Nom</label>
                    <input type="text" type="form-control" id="Nom" name="Nom" placeholder="Votre nom..." required>

                </div>
                <div class="col-md-6">
                    <label for="Prénom" class="form-label">Prénom</label>
                    <input type="text" type="form-control" id="Prénom" name="Prénom" placeholder="Votre prénom..." required>
                </div>
            </div>
            <div class="row">
            
                <div class="col-md-6">
                    <label for="Email" class="form-label">Adresse email</label>
                    <input type="email" type="form-control" id="Email" name="Email" placeholder="Votre adresse email..." required>

                </div>
                <div class="col-md-6">
                    <label for="Mdp" class="form-label">Mot de passe</label>
                    <input type="password" type="form-control" id="Mdp" name="Mdp" placeholder="Votre mot de passe..." required>
                </div>
            </div>

        </div>
        <div class="row my-3">
            <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-outline-primary" type="submit">Inscription</button></div>   
            </div>
        </div>
        
        </form>   
    </div>
   


    </body>