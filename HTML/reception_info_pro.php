<?php
// TEST :var_dump($_POST);
// fichier de connexion a la base de donnée
require ('../HTML/essaibdd.php');
//require ('../HTML/securite_bdd.php');
// reception des donnees du formulaire 
$nom_pro=($_POST['nom']);
$prenom_pro=($_POST['prenom']);
$lieu_pro1=($_POST['etablissement1']);
$lieu_pro2=($_POST['etablissement2']);
$profession=($_POST['professions']);
$tel_pro=($_POST['telephone']);
$mail_pro=($_POST['mail']);

//création de la requête SQL:
$sql = $connexion->prepare("INSERT INTO pro_info(nom_pro,prenom_pro,lieu_travail1,lieu_travail2,profession,tel_pro,adresse_pro)  VALUES (:nom,:prenom,:etablissement1,:etablissement2,:professions,:telephone,:mail)");
$sql->bindParam(':nom', $nom_pro, PDO::PARAM_STR);
$sql->bindParam(':prenom', $prenom_pro, PDO::PARAM_STR);
$sql->bindParam(':etablissement1',$lieu_pro1, PDO::PARAM_INT);
$sql->bindParam(':etablissement2',$lieu_pro2, PDO::PARAM_INT);
$sql->bindParam(':professions',$profession, PDO::PARAM_INT);
$sql->bindParam(':telephone',$tel_pro, PDO::PARAM_INT);
$sql->bindParam(':mail',$mail_pro, PDO::PARAM_INT);
$sql->execute();



//redirection vers a page initiale une fois l'operation effectuee
header('Location:formulaire_donnees_pro.php');

?>