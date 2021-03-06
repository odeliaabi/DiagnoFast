<?php
// On prolonge la session
session_start();

// On teste si la variable de session existe et contient une valeur
 if(!empty($_SESSION['id'])) 
  {
  $mail= $_SESSION['mail'];
  }
  else
  {
  // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location:connexion_patient.php');
  //exit();
  }
?>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="../CSS/profil_patient.css"/>
		<link rel="stylesheet" href="../CSS/MODEL.css"/>

        <title>Profil patient</title>
    </head>

    <body>
    	<div id="bandeau">
    	<center> 
    	<strong>BIENVENU SUR VOTRE PROFIL PATIENT  </strong> 
        </center> 
    	</div>

		<div id="contenu">
		<div class="message">
			
			<br><br><br>
			<h2><center>
				<em> Bonjour , <?php echo $mail ?> ! </em> </br>
				<em>Consultez vos informations personnelles !
				</em></center></h2>
			
				
		</div>
		
		<p class="intro"> 
		 <!--présentation de la page-->
		</p>
		
		<!--Menu de navigation pas forcément utile:
		<nav> 
			<ul>
				<li><a href = "#t1">Informations Administratives</a></li>
				<li><a href = "#t2">Antécédents Medicaux</a></li>
				<li><a href = "#t3">Constantes Vitales</a></li>
			</ul>
		</nav>
		-->
				
		<div class="contenu">
		<section class="cc1">
		
			<h2>Renseignements Administratifs</h2>
				<!--<p>présentation du module<br/>-->
				<p> Enregistrement </br>
				<a href = "http://localhost/DiagnoFast/HTML/patient_formulaire_administratif.php"><img src="../IMAGES/formulaire.png" alt ="dessin formulaire" title="Cliquez ici"/></a>
			</p></br>
			    <p> Consultation </p>
				<a href = "http://localhost/DiagnoFast/HTML/patient_info_administratif.php"><img src="../IMAGES/formulaire.png" alt ="dessin formulaire" title="Cliquez ici"/></a>
				</p>
		</section>
		
		<section class="cc2">
		
			<h2>Renseignements Médicaux</h2>
				<p>Enregistrement<br/>
				<a href = "http://localhost/DiagnoFast/HTML/patient_formulaire_fiche_medicale.php"><img src="../IMAGES/m.png" alt ="symbole medecine" title="Cliquez ici"/></a>
				</p>
				<p>Consultation<br/>
				<a href = "http://localhost/DiagnoFast/HTML/patient_info_fiche_medical.php"><img src="../IMAGES/m.png" alt ="symbole medecine" title="Cliquez ici"/></a>
				</p>
		
		</section>
		
		<section class="cc3">
		
			<h2>Traitements Actuels</br></h2>
				<p>Enregistrement<br/>
				<a href = "http://localhost/DiagnoFast/HTML/patient_formulaire_traitement.php"><img src="../IMAGES/med.png" alt ="dessin formulaire" title="Cliquez ici"/></a>
				</p>
				<p>Consultation<br/>
				<a href = "http://localhost/DiagnoFast/HTML/patient_info_traitement.php"><img src="../IMAGES/med.png" alt ="dessin formulaire" title="Cliquez ici"/></a>
				</p>
		</section>
		
		<section class="cc4">
		
			<h2>Constantes Vitales</br></h2>
				<p>Enregistrement<br/>
				<a href = "http://localhost/DiagnoFast/HTML/Patient_Fiche_Constantes.php"><img src="../IMAGES/ct.png" alt ="dessin electrocardio" title="Cliquez ici"/></a>
				</p>
				<p>Consultation<br/>
				<a href = "http://localhost/DiagnoFast/HTML/Patient_Info_Constantes.php"><img src="../IMAGES/ct.png" alt ="dessin electrocardio" title="Cliquez ici"/></a>
				</p>
		</section>
		
				
		</div>
		</div>
		<div id="piedpage">
			<center><p>Copyright Mesonn - Tous droits réservés<br >
            <a href="mailto:messon.mcdala@gmail.com">nous contacter !</a></p>	</center>
		</div>
    
    </body>
	
	
</html>