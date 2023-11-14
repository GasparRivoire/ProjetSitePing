<?php 
    $titre = "Titres des sujets";
    $Page = "index.php";
    $fe = "téléchargement.jfif";
    include 'Header.php';
    include 'retour.php';
    include 'getSujets.php';
?>
<body background="abc.jpg" style="background-size:cover;">
    <div align="center">
        <img src="1586606829_Esigelec.png" class="rounded mx-auto d-block" alt="Logo ESIGELEC">
    </div>

    <div class="row">
      <div class="col">
        <div align="center" class="container background-container p-0">
        <?php
                              foreach ($listeSujets as $index => $sujet) {
                                   echo 
                                   "<hr>
                                   <div class='row'>
                                       <div class='col-10' align='left'>
                                           Sujet {$sujet['id']}: {$sujet['nom']}
                                       </div> 
                                   </div>
                                   <hr>";
                               }
                               
                              ?>
          
      
        </div>
      </div>
    
          
         
          
        
          
    </div>

</body>
    
