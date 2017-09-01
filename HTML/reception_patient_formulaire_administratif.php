<?php
session_start();
// fichier de connexion a la base de donnée
require ('../HTML/essaibdd.php');
//require ('../HTML/securite_bdd.php');
// reception des donnes du formulaire 
$nom_patient=($_POST['nom']);
$prenom_patient=($_POST['prenom']);
$date_naissance=($_POST['dateN']);
$lieu_naissance=($_POST['lieuN']);
$adresse=($_POST['adresse']);
$tel=($_POST['num']);
$age=($_POST['age']);
$nom_proche=($_POST['nom1']);
$prenom_proche=($_POST['prenom1']);
$adresse_proche=($_POST['adresse1']);
$num_proche=($_POST['num1']);
//$regime_secu=$_POST['secu'];
$carte_vitale=($_POST['num_cv']);

//echo $nom_patient;echo $prenom_patient;echo $lieu_naissance;echo $tel;echo $nom_proche;
//echo $prenom_proche;echo $num_proche;echo $carte_vitale;

//création de la requête SQL:
$sql = $connexion->prepare("INSERT INTO patient_info_administratives(`patient_nom`, `patient_prenom`,`patient_date_naissance`,`patient_lieu_naissance`,`patient_adresse`,`patient_tel`,`patient_age`,`contact_nom`,`contact_prenom`,`contact_adresse`,`contact_telephone`,`patient_numero_secu`) 
	VALUES (:nom, :prenom,:dateN,:lieuN,:adresse,:num,:age,:nom1,:prenom1,:adresse1,:num1,:num_cv)");

$sql->bindParam(':nom', $nom_patient, PDO::PARAM_STR);
$sql->bindParam(':prenom', $prenom_patient, PDO::PARAM_STR);
$sql->bindParam(':dateN', $date_naissance, PDO::PARAM_INT);
$sql->bindParam(':lieuN', $lieu_naissance, PDO::PARAM_STR);
$sql->bindParam(':adresse', $adresse, PDO::PARAM_STR);
$sql->bindParam(':num', $tel, PDO::PARAM_INT);
$sql->bindParam(':age', $age, PDO::PARAM_INT);
$sql->bindParam(':nom1', $nom_proche, PDO::PARAM_STR);
$sql->bindParam(':prenom1', $prenom_proche, PDO::PARAM_STR);
$sql->bindParam(':adresse1', $adresse_proche, PDO::PARAM_STR);
$sql->bindParam(':num1', $num_proche, PDO::PARAM_INT);
$sql->bindParam(':num_cv', $carte_vitale, PDO::PARAM_INT);
$sql->execute();

//redirection vers a page initiale une fois l'operation effectuee
header('Location:profil_patient.php');

?>