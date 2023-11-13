<?php 
    $titre = "Profil étudiant";
    $Page = "index.php";
    $fe = "téléchargement.jfif";
    include 'Header.php';
    
?>

<div>
    <button class="btn btn-primary m-0" onclick="window.location.href = 'Page_connexion.php';" role="button">Déconnexion</a> 
</div>

<body background="abc.jpg" style="background-size:cover;">
    <?php    session_start();?>
    <h1 class="front">Projet PING 2023/2024</h1>
    <div class="containers">
        
        <div class="row">
          <div class="d-grid gap-2 justify-content-md-end">
            
           
        </div>
        
            <div >
                <img src="1586606829_Esigelec.png" class="rounded mx-auto d-block" alt="Logo ESIGELEC">
            </div>
              
    </div>
    <div class="row">
      <div class="col">
        <div align="center" class="container background-container p-0">
            
            <?php echo  "Bienvenue : ".$_SESSION['Prenom'] . ' ' . $_SESSION['Nom']; ?>
            <br>
            <a class="btn btn-primary me-md-2" href="sujets.php" role="button">Consulter les sujets</a>
        </div>
      </div>         
    </div>
    
    <div class="d-grid col-3 ml-md-2">
      <br>
      <button class="btn btn-primary m-0" onclick="window.location.href = 'Contacts1.php';">Nous contacter</button>
      
     
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>