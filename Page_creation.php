<?php 
    $titre = "Page de création de cours";
    $Page = "index.html";
    include 'Header.php';
?>

<?php include 'retour.php'; ?>

<div class="container">
    <br><br>
<h1>Inscription</h1>
<br><br><br><br>
<form method="POST" action="connexion1.php">
        
    <div class="row my-3" >
        <div class="col-md-6">
            <label for="Nom" class="form-label">Nom</label>
            <br>
            <input type="text" class="form-control " id="Nom" name="Nom" placeholder="Votre nom..." required>
            

        </div>
        <div class="col-md-6">
            <label for="Prénom" class="form-label">Prénom</label>
            <br>
            <input type="text" class="form-control" id="Prénom" name="Prénom" placeholder="Votre prénom..." required>
        </div>
    </div>
    <div class="row my-3">
            
        <div class="col-md-6">
            <label for="Email" class="form-label">Adresse email</label>
            <br>
            <input type="email" class="form-control" id="Email" name="Email" placeholder="Votre adresse email..." required>

        </div>
        <div class="col-md-6">
            <label for="Mdp" class="form-label">Mot de passe</label>
            <br>
            <input type="password" class="form-control" id="Mdp" name="Mdp" placeholder="Votre mot de passe..." required>
        </div>
    </div>

    <div class="row my-3">
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-outline-primary" type="submit">Inscription</button>
        </div>   
    </div>
    
        
</form>   
</div>
   


    </body>