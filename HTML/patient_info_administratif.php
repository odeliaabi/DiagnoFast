<?php 
require('../HTML/essaibdd.php');
session_start();
require ('../HTML/essaibdd.php');

$req=$connexion->prepare('SELECT * FROM patient_info_administratives');
$req->execute();
while($d=$req->fetch())
{
    if ($d['patient_prenom']=="Odelia")
    {$nom= $d['patient_nom'];
    $prenom=$d['patient_prenom'];
    $date_naissance=$d['patient_date_naissance'];
    $lieu_naissance=$d['patient_lieu_naissance'];
    $adresse=$d['patient_adresse'];
    $tel=$d['patient_tel'];
    $age=$d['patient_age'];
    $contact_nom=$d['contact_nom'];
    $contact_prenom=$d['contact_prenom'];
    $contact_adresse=$d['contact_adresse'];
    $contact_tel=$d['contact_telephone'];}
}
?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../CSS/patient_info_administrative.css" />
         
        <title>Informations Administratives </title>
    </head>
    <body>
    	<div id= "bandeau">  <center> INFORMATIONS ADMINISTRATIVES  </center>          </div>
    	<div id= "contenu"> 
      <center> </br></br> 
        <strong> INFORMATIONS PERSONNELLES </strong></br>
        <div id= "info_perso">
         <p> Nom:  <?php echo $nom; ?> </br>
          Prenom:  <?php echo $prenom; ?></br>
          Date de naissance:  <?php echo $date_naissance; ?></br>
          Lieu de naissance:  <?php echo $lieu_naissance; ?></br>
          Adresse:  <?php echo $adresse; ?> </br>
          Numéro de téléphone: <?php echo $tel; ?></br>
          Age: <?php echo $age; ?> </br></br></br></p>
        </div>
        <div id="contact">
          <strong> PERSONNE A CONTACTER</strong></br>
         <p> Nom:  <?php echo $contact_nom; ?> </br>
          Prenom:  <?php echo $contact_prenom; ?></br>
          Adresse:  <?php echo $contact_adresse; ?> </br>
          Numéro de téléphone:  <?php echo $contact_tel; ?></br>
          </br></br></br></p>
        </div>
        </center>
         </div>
    	<div id= "piedpage">   <div id="contact">
                    <center>Nous contacter: </br>messon.mcdala@gmail.com</center>
                   
                </div>             </div>

    </body>
</html>