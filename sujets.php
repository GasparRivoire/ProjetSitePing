<?php 
    $titre = "Titres des sujets";
    $Page = "eleve.php";
    $fe = "téléchargement.jfif";
    include 'Header.php';
    include 'retour.php';
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
               <form method="POST" action="connexion1.php">
                    <hr>
                    <div class="row">
                         <div class="col-10">
                              Sujet 1 : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, doloremque?.
                         </div> 
                         <div class="col-2">
                              <button onclick="window.location.href = 'Sujet.php'">Consulter</button>
                         </div> 
                    </div>
                    <hr>
                    <div class="row">
                         <div class="col-10">
                              Sujet 2 : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, doloremque?.
                         </div> 
                         <div class="col-2">
                              <button onclick="window.location.href = 'Sujet.php'">Consulter</button>
                         </div> 
                    </div>
                    <hr>
                    <div class="row">
                         <div class="col-10">
                              Sujet 3 : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, doloremque?.
                         </div> 
                         <div class="col-2">
                              <button onclick="window.location.href = 'Sujet.php'">Consulter</button>
                         </div> 
                    </div>
                    <hr>
                    
               </form>
        </div>

</body>
    
