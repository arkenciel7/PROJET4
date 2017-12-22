<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8"/>
    <!-- balise méta pour les médias q -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <!-- Opengraph pour Facebook -->
    <meta property="og:title" content="velib"/>
    <meta property="og:type" content="application web"/>
    <meta property="og:url" content="http://projet4.recherchefinancement.org"/>
    <meta property="og:image" content="images/projet4.png"/>
    <meta property="og:description" content="Velib Paris, reservation de vélos"/>
    <!-- Opengraph pour Twitter -->
    <meta name="twitter:card" content="velobib">
    <meta name="twitter:site" content="velib">
    <meta name="twitter:title" content="Application de location de vélos">
    <meta name="twitter:description" content="application de location de vélos, paris">
    <meta name="twitter:image" content="images/slider/petite_fille_mascotte.jpg">
    
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    
    <link rel="stylesheet" href="img/font-awesome/css/font-awesome.min.css">    
    <link rel="stylesheet" href="style.css" />
    
    <title>Blog écrivain</title>
    
</head>
	
<body> 
<!--**********************************************
                BANDE NOIRE
**************************************************-->
   <?php 
    include("bande_noire.php");
    ?>
    
    
<!--**********************************************
                    LOGO & Titre du livre
**************************************************-->
   
    <?php 
    include("logo.php");
    ?>
    
<!--**********************************************
                    MENU
**************************************************-->
   
    <?php 
    include("menu.php");
    ?>
    

 <!--**********************************************
 			Slideshow, slider et bouttons-fleches
 **************************************************-->
   
 <?php 
    include("slides.php");
    ?>
 <!-- ****************************************
 			BIBLIO et DERNIERS CHAPITRES
******************************************-->
    <section id="application">    
       	<!--Présentation de l'auteur-->
        <div id="biblio">
            
            <div class="titre1"> 
                <div class="titre2"> 
                    <h1>Qui est Jean FORTEROCHE ? </h1>
                </div>
            </div>
            
            <figure id="photo_auteur"> 
              <img src="img/jf.jpg"/>
            </figure>
            
            <p>
            Quare talis improborum consensio non modo excusatione amicitiae tegenda non est sed potius supplicio omni vindicanda est, ut ne quis concessum putet amicum vel bellum patriae inferentem sequi; quod quidem, ut res ire coepit, haud scio an aliquando futurum sit. Mihi autem non minori curae est, qualis res publica post mortem meam futura, quam qualis hodie sit.
            Quare talis improborum consensio non modo excusatione amicitiae tegenda non est sed potius supplicio omni vindicanda est, ut ne quis concessum putet amicum vel bellum patriae inferentem sequi; quod quidem, ut res ire coepit, haud scio an aliquando futurum sit. Mihi autem non minori curae est, qualis res publica post mortem meam futura, quam qualis hodie sit. 
            <a href="auteur.html"> Lire plus... </a>
            </p>
            
        </div>
            
        <!--Derniers acticles-->
        <div id="station"> 
            <!-- Titre -->
            <div class="titre1"> 
                <div class="titre2"> 
                    <h1>DERNIERS ARTICLES </h1>
                </div>
            </div>
            
            <!-- Billets -->
            <div class="billets"> 
                
                <!-- image billet -->
                <figure class="imgBillets">
                    <img src="img/03.jpg"/> 
                </figure>
                
                <!-- Corps billet -->
                <div class="corpsBillets">
                    <h2>Titre billet</h2>
                    <p> corps </p>  <!-- Corps : Auteurs/Date/titreBillet/TexteAccro -->
                </div>
                
                <!-- Footer billet -->
                <div class="footerBillets"> <a href="billet.html"> Lire plus...</a> <!-- footer : Lire plus...  -->
                </div>
            </div>
                
        </div> <!-- Fin Station -->   

    </section> <!--FIn application-->


<!-- ****************************************
		 FOOTER
********************************************* -->
  <?php 
    include("footer.php");
    ?>
    
    
    
<!-- Javascript -->
    
    <script type="text/javascript" src="https://code.jquery.com/jquery.min.js"> </script>
    <script type="text/javascript" src="javaScript/sliderTitre.js"></script>
    <script type="text/javascript" src="javaScript/slider.js"></script>
    
</body>
</html>
