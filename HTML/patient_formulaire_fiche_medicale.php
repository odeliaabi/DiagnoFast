<head>
        <meta charset="utf-8" />
		<!--<link rel="stylesheet" href="../CSS/patient_formulaire_administratif.css"/>-->
		<link rel="stylesheet" href="../CSS/MODEL.css"/>
		<link rel="stylesheet" href="../CSS/patient_formulaire_fiche_medicale.css"/>
        <title>Formulaire_fiche_medicale</title>
    </head>

<body>

<div id= "bandeau">               
		<center><strong>MA FICHE MEDICALE </strong></center>
</div>
<div id="contenu">
<form action="http://localhost/DiagnoFast/HTML/reception_patient_formulaire_fiche_medicale.php" method="post">
    <div id="formulaire">
<p>
<div id="medecin_traitant">
<h1> <center> Mon Médecin Traitant </center></h1>
<hr>
<br>
<br>						
<b>Civilité:</b>	<input type="radio" name="civilite" value="M">Monsieur
					<input type="radio" name="civilite" value="Mme">Madame	
					<input type="radio" name="civilite" value="Mlle">Mademoiselle	
<br>
<br>
<b>Nom:</b>	<input type="text" name="nom" size="20" maxlength="30" placeholder="EX: ABIZMIL">
<br>
<br>
<b>Prénom:</b>	<input type="text" name="prenom" size="20" maxlength="30" placeholder="EX: Odélia">																		
<br>
<h1><center><em> Coordonnées De Mon Médecin Traitant </em></center></h1>
<b>Téléphone:</b>
<input type="text" name="telephone" size="16" maxlength="20" placeholder="EX: 06 01 02 03 04"> 
<br>
<br>
<b>Adresse mail:</b>
<input type="text" name="mail" size="30" maxlength="40" placeholder="EX: odelia.abizmil@gmail.com">
<br>
<br>
<b>Adresse du cabinet :</b> <input type="text" name="adresse" size="50" maxlength="100" placeholder="EX: 35, Rue De Paris 92000 CLICHY SUR SEINE">	 
<br>
<br></div>
<div id="Antecedents">
<h1> <center> Mes Antécédents </center></h1>
<hr>
<br>
<center>
<b>Antécédents médicaux</b>
<br>
<br>
<textarea name="AM" rows="5" cols="50" placeholder="EX: 1) Cholestérole, 2) Hyper tension artérielle , 3) ..."></textarea>
</center>
<br>
<br>
<center>
<b>Antécédents chirurgicaux</b>
<br>
<br>
<textarea name="AC" rows="5" cols="50" placeholder="EX: 1) Opération A, 2) Opération B, 3) ..."></textarea>
</center>
<br>
<br>
<center>
<b>Antécédents gyneco obstétrique</b>
<br>
<br>
<textarea name="AGO" rows="5" cols="50" placeholder="EX: 1) A, 2) B, 3) ..."></textarea>
</center>
<br>
<br>
<center>
<b>Antécédents facteur de risques cardio vasculaire</b>
<br>
<br>
<textarea name="AFRCV" rows="5" cols="50" placeholder="EX: 1)  A, 2)  B, 3) ..."></textarea>
</center>
<br>
<br></div>
<div id="Allergies">
<h1> <center> Mes Allergies </center></h1>
<hr>
<h1> <center><em> Allergies Aux Médicaments </em></center></h1>
<center>						
<input type="radio" name="Allergie1" value="Aucune allergie">Aucune allergie
<input type="radio" name="Allergies1" value="Allergique">Je suis allergique à certains médicaments
<br>
<br>
<b>Médicaments auxquels je suis allèrgique</b>
<br>
<br>
<textarea name="Allergies_medicaments" rows="5" cols="50" placeholder="EX: 1) Médicament A, 2) Médicament B, 3) ..."></textarea>
</center>						
<br>
<h1> <center><em> Allergies Alimentaires </em></center></h1>
<center>						
<input type="radio" name="Allergies2" value="Aucune allergie">Aucune allergie
<input type="radio" name="Allergies2" value="Allergique">Je suis allergique à certains aliments
<br>
<br>
<b>Aliments auxquels je suis allèrgique</b>
<br>
<br><textarea name="Allergies_alimentaires" rows="5" cols="50" placeholder="EX: 1) Aliment A, 2) Aliment B, 3) ..."></textarea>
</center>
<br>
<br></div>
<div id="Maladies_hereditaires">
<h1> <center> Maladies à caractère héréditaire </center></h1>
<hr>
<br>
<center>						
<input type="radio" name="MH" value="Aucune MH">Aucune maladie dans la famille
<input type="radio" name="MH" value="MH">Présence de maladies héréditaires dans la famille
<br>
<br>
<b>Maladies à caractère héréditaire présente dans la famille</b>
<br>
<br>
<textarea name="MH" rows="5" cols="50" placeholder="EX: 1) Mucovicidose, 2) Hémophilie, 3) ..."></textarea>
</center>
<br>
<br>	
<h1> <center> Maladies récurentes dans la famille  </center></h1>
<hr>
<br>
<center>						
<input type="radio" name="MH" value="Aucune MH">Aucune maladie récurentes dans la famille
<input type="radio" name="MH" value="MH">Présence de maladies récurentes dans la famille
<br>
<br>
<b>Maladies récurentes dans la famille</b>
<br>
<br>
<textarea name="MR" rows="5" cols="50" placeholder="EX: 1) Obésité, 2) Diabète, 3) ..."></textarea>
</center>
</div>
</div>
<div id="Groupe_sanguin">
<h1><center> Groupe Sanguin</center> </h1>
</br>
<center>
<b>Mon groupe sanguin est :</b>	<select name="GS">
	<option value="A+">A+
	<option value="A-">A-
	<option value="B+">B+
	<option value="B-">B-
	<option value="AB+">AB+	
	<option value="AB-">AB-
	<option value="O+">O+
	<option value="O-">O-
</center>

</br></div>
</p>
<br>

</div>
<div id="bouton"> 
               <center>
                <input type="submit" value="TERMINER">
                </center>
            </div></form>
<!--<div id= "piedpage">  
    <center>Nous contacter: </br>messon.mcdala@gmail.com</center>
                   
  </div>-->
</div>
</body>