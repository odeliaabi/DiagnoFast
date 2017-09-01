<?php
// TEST :var_dump($_POST);
// fichier de connexion a la base de donnée
require ('../HTML/securite_bdd.php');
require ('../HTML/essaibdd.php');
//echo $_POST['nom'];
//echo $_POST['prenom'];
//echo $_POST['licence'];
//echo $_POST['password'];


// reception des donnees du formulaire 
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$pass=$_POST['mot_de_passe'];
$licence=$_POST['licence'];
// test fonctionnement methode post 
//echo $nom;
//echo $prenom;
//echo $pass;
//echo $licence;


//création de la requête SQL:
//$sql = $connexion->prepare("INSERT INTO inscription_pro(nom_pro,prenom_pro,mdp_pro)  VALUES (:nom,:prenom,:mot_de_passe)");
//$sql->bindParam(':nom', $nom, PDO::PARAM_STR);
//$sql->bindParam(':prenom', $prenom, PDO::PARAM_STR);
//$sql->bindParam(':mot_de_passe',$pass, PDO::PARAM_INT);
//$sql->execute();
$sql = $connexion->prepare("INSERT INTO inscription_professionnel(licence,nom_professionnel,prenom_professionel,mdp_professionel)  VALUES (:licence,:nom,:prenom,:mot_de_passe)");
$sql->bindParam(':licence', $licence);
$sql->bindParam(':nom', $nom, PDO::PARAM_STR);
$sql->bindParam(':prenom', $prenom, PDO::PARAM_STR);
$sql->bindParam(':mot_de_passe',$pass, PDO::PARAM_INT);
$sql->execute();

//redirection vers a page initiale une fois l'operation effectuee
header('Location:confirmation_inscription_pro.php');

?>