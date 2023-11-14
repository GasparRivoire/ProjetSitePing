<?php 
    $titre = "Page de création de cours";
    $Page = "index.php";
    include 'Header.php';
    include 'retour.php';
?>

<body background="abc.jpg" style="background-size:cover;">

<div class="container">
    <br><br>
<h1 class="background-container"><hr>Inscription <hr></h1>
<br><br><br><br>
<form method="POST" action="Inscription.php">
        
    <div class="row my-3 background-container" >
        <div class="col-md-6">
            <label for="Nom" class="form-label">Nom</label>
            <br>
            <input type="text" class="form-control " id="Nom" name="Nom" placeholder="Votre nom..." required>
            

        </div>
        <div class="col-md-6 background-container">
            <label for="Prenom" class="form-label">Prenom</label>
            <br>
            <input type="text" class="form-control" id="Prenom" name="Prenom" placeholder="Votre Prenom..." required>
        </div>
        <hr>
    </div>
    <div class="row my-3 background-container">
            
        <div class="col-md-6">
            <label for="Email" class="form-label">Adresse email</label>
            <br>
            <input type="email" class="form-control" id="Email" name="Email" placeholder="Votre adresse email..." required>
            <hr>

        </div>
        <div class="col-md-6">
            <label for="Mdp" class="form-label">Mot de passe</label>
            <br>
            <input type="password" class="form-control" id="Mdp" name="Mdp" placeholder="Votre mot de passe..." required>
            <hr>
        </div>
    </div>

    <div class="row my-3 background-container">
        <hr>
        <div class="d-grid gap-2 d-md-block">
            <button class=" btn-outline-primary" type="submit">Inscription</button>
        </div> 
        <hr>  
    </div>
    
        
</form>   
</div>
   


</body>