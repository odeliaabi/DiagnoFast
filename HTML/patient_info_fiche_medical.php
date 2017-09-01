<?php 


//require ('../HTML/essaibdd.php');

//$req=$connexion->prepare('SELECT * FROM medecin_traitant');
//$req->execute();
//while($d=$req->fetch())
//{
  //  if ($d['prenom_med_trait']=="raphael")
  //  {$nom= $d['nom_med_trait'];
  //  $prenom=$d['prenom_med_trait'];
  //  $tel=$d['tel_med_trait'];
   // $mail=$d['mail_med_trait'];
  //  $adresse=$d['adresse_med_trait'];
//}

//$req2=$connexion->prepare('SELECT * FROM patient_fiche_medicale');
//$req2->execute();
//while($a=$req2->fetch())
//{
 //  $ant_med=$a['ant_medicaux'];
 //  $ant_chir=$a['ant_chirurgicaux'];
 //  $ant_gyneco=$a['ant_gyneco'];
 //  $all_med=$a['allergie_medoc'];
 //  $all_alim=$a['allergie_aliment'];
 //  $ant_cardiov=$a['ant_cardiovascu'];
 //  $hered=$a['maladie_hereditaires'];
 //  $predispo=$a['predispositions'];
 //  $groupe_sanguin=$a['groupe_sanguin'];
//}
?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../CSS/patient_info_medicale.css" />
         

        <title> </title>
    </head>
    <body>
    	<div id= "bandeau">  <center>INFORMATIONS MEDICALES </center>   </div>
    	<div id= "contenu">  
         <center>
         <strong>MON MEDECIN TRAITANT </strong>
     </br>
          <p> Nom: Nezri     </p>
          <p> Prenom : Julia       </p>   
          <em> Ses coordonnées: </em>
          <p> Téléphone : 0626458912       </p>
          <p> Mail: jujunez@gmail.com      </p>
          <p> Adresse de cabinet: 13 rue babeuf, kremlin-bicetre         </p>
          <p>_______________________________</p>
          <strong> MES ALLERGIES </strong>
      </br>   
           <p> Allergies médicamenteuses: penicilline </p>
          <p> Allergies alimentaires: gluten </p>
          <p>_______________________________</p>
          <strong> ANTECEDENTS</strong>
          <p> Antécedents medicaux : diabete de type 1</p>
          <p> Antecedents chirurgicaux: operation de l'apindicite </p>
          <p> Antecedents cardiovasculaires: hypertension arterielle dans la famille </p>
          <p> Antecedents gyneco-obstetriques: Aucun </p>
          <p>_______________________________</p> 
          <strong> FACTEURS DE RISQUE</strong>
          <p> Predispositions : diabete  et hypertension arterielle </p>
          <p> Maladies hereditaires : diabete </p>
          <P> Groupe sanguin : A+ </p></br>
           </center>      </div>
    	<div id= "piedpage">   <div id="contact">
                    <center>Nous contacter: </br>messon.mcdala@gmail.com</center>
                   
                </div>             </div>

    </body>
</html>