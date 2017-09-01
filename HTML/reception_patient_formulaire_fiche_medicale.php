<?php
// fichier de connexion a la base de donnée
require ('../HTML/essaibdd.php');
// reception des donnes du formulaire 
$nom_medecin_traitant=$_POST['nom'];
$prenom_medecin_traitant=$_POST['prenom'];
$telephone_medecin_traitant=$_POST['telephone'];
$mail_medecin_traitant=$_POST['mail'];
$adresse_medecin_traitant=$_POST['adresse'];
$all_medocs=$_POST['Allergies_medicaments'];
$all_alimentaires=$_POST['Allergies_alimentaires'];
$ant_med=$_POST['AM'];
$ant_chir=$_POST['AC'];
$ant_gyneco=$_POST['AGO'];
$ant_cardio=$_POST['AFRCV'];
$maladie_hered=$_POST['MH'];
$maladie_recur=$_POST['MR'];
$groupe_sanguin=$_POST['GS'];

// test 
//echo $all_medocs;
//echo $all_alimentaires;
//echo $ant_med;
//echo $ant_chir;
//echo $ant_gyneco;
//echo $ant_cardio;
//echo $maladie_hered;
//echo $maladie_recur;
//echo $groupe_sanguin;
//création de la requête SQL:
$req1 = $connexion->prepare("INSERT INTO medecin_traitant(`nom_med_trait`, `prenom_med_trait`,`tel_med_trait`,`mail_med_trait`,`adresse_med_trait`) VALUES (:nom, :prenom,:telephone,:mail,:adresse)");

$req1->bindParam(':nom', $nom_medecin_traitant, PDO::PARAM_STR);
$req1->bindParam(':prenom', $prenom_medecin_traitant, PDO::PARAM_STR);
$req1->bindParam(':telephone', $telephone_medecin_traitant, PDO::PARAM_INT);
$req1->bindParam(':mail', $mail_medecin_traitant, PDO::PARAM_STR);
$req1->bindParam(':adresse', $adresse_medecin_traitant, PDO::PARAM_STR);
$req1->execute();


//création de la requête SQL:
//$req2 = $connexion->prepare("INSERT INTO patient_fiche_medicale(allergie_medoc, allergie_aliment,ant_medicaux,ant_chirurgicaux,ant_gyneco,ant_cardiovascu,maladie_hereditaires,predispositions,groupe_sanguin) VALUES (:Allergies_medicaments,:Allergies_alimentaires,:AM, :AC,:AGO,:AFRCV,:MH;:MR,:GS)");

//$req2->bindParam(':Allergies_medicaments', $all_medocs, PDO::PARAM_STR);
//$req2->bindParam(':Allergies_alimentaires', $all_alimentaires, PDO::PARAM_STR);
//$req2->bindParam(':AM', $ant_med, PDO::PARAM_STR);
//$req2->bindParam(':AGO', $ant_gyneco, PDO::PARAM_STR);
//$req2->bindParam(':AFRCV', $ant_cardio, PDO::PARAM_STR);
//$req2->bindParam(':MH', $maladie_hered, PDO::PARAM_STR);
//$req2->bindParam(':MR', $maladie_recur, PDO::PARAM_STR);
//$req2->bindParam(':GS', $groupe_sanguin, PDO::PARAM_STR);
//$req2->execute();

//redirection vers a page initiale une fois l'operation effectuee
header('Location:patient_info_fiche_medical.php');

?>