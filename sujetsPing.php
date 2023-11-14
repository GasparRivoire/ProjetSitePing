<?php 
    $titre = "Titres des sujets";
    $Page = "commissionPing.php";
    $fe = "téléchargement.jfif";
    include 'Header.php';
    include 'retour.php';
    include 'getSujets.php';
?>
<body background="abc.jpg" style="background-size:cover;">
    <div align="center">
        <img src="1586606829_Esigelec.png" class="rounded mx-auto d-block" alt="Logo ESIGELEC">
    </div>
            <br>
            <br>
            <br>
     
            
     <div align="center" class="container background-container p-0">
                    
                         <?php
                              foreach ($listeSujets as $index => $sujet) {
                                   echo 
                                   "<hr>
                                   <div class='row'>
                                       <div class='col-10' align='left'>
                                           Sujet {$sujet['id']}: {$sujet['nom']}
                                       </div> 
                                       <div class='col-2'>
                                           <button onclick=\"window.location.href = 'SujetInscrits.php?sujet={$sujet['id']}'\">Consulter les inscrits</button>
                                       </div>
                                   </div>
                                   <hr>";
                               }
                               
                              ?>
                              <button onclick="window.location.href = 'creerSujet.php'">Ajouter un sujet</button>

          </div>
        

</body>
    
