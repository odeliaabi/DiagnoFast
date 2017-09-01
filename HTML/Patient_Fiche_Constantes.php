<!DOCTYPE html PUBLIC>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
	<link rel="stylesheet" href="../CSS/patient_constantes.css"/>
	<!--<link rel="stylesheet" href="../CSS/MODEL.css"/>-->
	<title> Mes Constantes </title>
</head>


<body>


<div id="bandeau"><center>
<strong> MESURE DE MES CONSTANTES </strong>
</center>
<div id="contenu">
<center>
<p>
<br>
<br>
	<form method="post" action="http://localhost/DiagnoFast/HTML/reception_patient_formulaire_administratif.php">
<b>Date du jour:</b>
<input type="text" name="date" size="10" maxlength="100" placeholder="EX: 01/01/17">
<br>
<br>
<b>Température corporelle: </b>	
<input type="text" name="temp" size="10" maxlength="100" placeholder="EX: 38,5">	
<b>°C</b>
														
<br>
<br>
<b>Fréquence cardiaque:</b>
<input type="text" name="fc" size="10" maxlength="100" placeholder="EX: 72"> 
<b>BPM</b>

<br>
<br>
<b>Indice Glycémique:</b>
<input type="text" name="ig" size="10" maxlength="100" placeholder="EX: 35">
<b>sur l'intervalle de valeur d'IG</b>

<br>
<br>
<b>Pression artérielle :</b> 
<input type="text" name="pa" size="10" maxlength="100" placeholder="EX: 14/9">
<b>Pa</b>

<br>
<br>
<input type="submit" value="Enregistrer mes informations !">
</p>
<a href="http://localhost/DiagnoFast/HTML/suivi_constantes_vitales.php">Observer l'évolution de mes constantes</a>
</center>
</form>
</div>

<div id="piedpage">
<center>
Nous contacter: </br>messon.mcdala@gmail.
</center>
</div>   

</body>
     
</div>

</html>