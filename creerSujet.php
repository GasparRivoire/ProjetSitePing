<?php 
    $titre = "Page de création de cours";
    $Page = "commissionPing.php";
    include 'Header.php';
    include 'retour.php';
?>

<body background="abc.jpg" style="background-size:cover;">

<div class="container">
    <br><br>
    <h1 class="background-container"><hr>Ajouter un sujet <hr></h1>
    <br><br><br><br>
    <form method="POST" action="ajouterSujet.php">
        <div class="row my-3 background-container">
            <div class="col-md-6">
                <label for="TitreSujet" class="form-label">Titre du sujet</label>
                <br>
                <input type="text" class="form-control" id="TitreSujet" name="TitreSujet" placeholder="Titre du sujet..." required>
                <hr>
            </div>
            <div class="col-md-6">
                <label for="DescSujet" class="form-label">Description du sujet</label>
                <br>
                <textarea class="form-control" id="DescSujet" name="DescSujet" placeholder="Description du sujet..." required></textarea>
                <hr>
            </div>
        </div>

        <div class="row my-3 background-container">
            <hr>
            <div class="d-grid gap-2 d-md-block">
                <button class=" btn-outline-primary" type="submit">Ajouter le sujet</button>
            </div> 
            <hr>  
        </div>
    </form>   
</div>

</body>
