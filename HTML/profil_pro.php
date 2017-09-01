<?php
// On prolonge la session
session_start();

// On teste si la variable de session existe et contient une valeur
 if(!empty($_SESSION['licence'])) 
  {
   $prenom= $_SESSION['prenom'];
   $nom=$_SESSION['nom'];
  }
  else
  {
  // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location:connexion_pro.php');
  //exit();
  }
?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../CSS/menu_pro.css"/>
        <link rel="stylesheet" href="../CSS/MODEL.css"/>
        <title>Menu_page_pro</title>
    </head>

    <body>
        
        <div class="bandeau" >
            
            <h1>Ma Page Professionnelle </h1>
            <br/>
            
            
                
        </div>
        
        <p class="intro"> 
         <h2><center>
                <em> Bonjour , <?php echo $prenom;?> !
                  </em> </br>
                <h3>Gérez votre compte professionnel</h3>
                <!--<em>Consultez vos informations personnelles !
                </em>--></center></h2>
        </p>
        
                
        <div class="contenu">
        <section class="cc1">
        
            <h2>MA FICHE DE RENSEIGNEMENTS</h2>
                <p><br/>
                <br/>
                <br/>
                <a href = "http://localhost/DiagnoFast/HTML/info_pro.php"><input type="submit" value="accès"></a>
                </p>
        </section>
        
        <section class="cc2">
        
            <h2>ACCEDER A LA BASE DE DONNEES</h2>
                <p><br/><br/><br/>
                <a href = "http://localhost/DiagnoFast/HTML/profil_patient_pour_pro.php"><input type="submit" value="accès"></a>
                </p>
        
        </section>
        
        
        <section class="cc3">
        
            <h2>MODIFIER MON MOT DE PASSE</br></h2>
            <p><br/>
                <br/>
                <br/>
                <a href = "http://localhost/DiagnoFast/HTML/modif_parametre_compte_pro.php"><input type="submit" value="accès"></a>
                </p>
        </section>
        
                
        </div>
        
        <div class="piedpage">
            <p>Copyright Mesonn - Tous droits réservés<br />
            <a href="mailto:messon.mcdala@gmail.com">nous contacter !</a></p>   
        </div>
    
    </body>
    
    
</html>
<!--DOCTYPE html>
<!--<html>
<!--    <head>
<!--        <meta charset="utf-8" />
<!--        <link rel="stylesheet" href="../CSS/MODEL.css" />
<!--<!--        <link rel="stylesheet" href="../CSS/profil_patient.css"/>

<!--        <title>Profil pro </title>
<!--<!--    </head>
<!--    <body>
<!--    	<div id= "bandeau">  <center> <strong>MON PROFIL PROFESSIONEL DE SANTE</strong> </center>          </div>
<!--<!--    	<div id= "contenu">
<!--        <div class="message">
            
<!--            <br><br><br>
<!--            <h2><center>
<!--                <em>Consultez vos informations professionnelles !
<!--                </em></center></h2>
            
                
        
<!--        <p class="intro"> 
         <!--présentation de la page-->
<!--        </p>
        
                
<!--        <div class="contenu">  
<!--        <section class="cc1">
        
<!--            <h2> Mes infos </h2>
<!--                <p>présentation du module<br/>
<!--                <a href = "http://localhost/DiagnoFast/HTML/formulaire_donnees_pro.php"><img src="../IMAGES/formulaire.png" alt ="dessin formulaire" title="Cliquez ici"/></a>
<!--                </p>
<!--        </section>
        
<!--        <section class="cc2">
        
<!--            <h2> Fiche patient </h2>
<!--                <p>présentation du module<br/>
<!--                <a href = "http://localhost/DiagnoFast/HTML/profil_patient_pour_pro.php"><img src="../IMAGES/m.png" alt ="symbole medecine" title="Cliquez ici"/></a>
<!--                </p>
        
<!--        </section>
        
<!--        <section class="cc3">
        
<!--            <h2>Constantes vitales</br></h2>
<!--                <p>présentation du module<br/>
<!--                <a href = "#lien-page_suivi-constantes"><img src="../IMAGES/med.png" alt ="dessin formulaire" title="Cliquez ici"/></a>
<!--                </p>
<!--        </section>
        
<!--        <section class="cc4">
        
<!--           <h2>Modification parametres du compte</br></h2>
<!--                <p>présentation du module<br/>
<!--                <a href = "http://localhost/DiagnoFast/HTML/modif_parametre_compte_pro.php"><img src="../IMAGES/ct.png" alt ="dessin electrocardio" title="Cliquez ici"/></a>
<!--                </p>
<!--<!--        </section>
<!--                 </div>
<!--    	<div id= "piedpage">   <div id="contact">
<!--                    <center>Nous contacter: </br>messon.mcdala@gmail.com</center>
                   
<!--                </div>             </div>
<!--          </div>             </div>

<!--    </body>
<!--</html>