<?php


//$nom = $_POST['nom'];
//$prenom = $_POST['prenom'];
//$password = $_POST['password'];
$server="localhost";
            $login="root";
            $pass="diagnofast";

            try
            {
                $connexion=new PDO("mysql:host=$server;dbname=diagnofast",$login,$pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);    
                //echo 'connexion reussie' ;      
                
            }
            catch (PDOException $e)
            {
                echo 'Echec'.$e->getMessage();
            }
           
        
     


     
//Insertion en BDD
 //$req = "INSERT INTO inscription_patient (prenom, nom,mot_de_passe)
       // VALUES (:prenom,:nom,:mot_de_passe)";
        
        //$req = $bdd->prepare($req);
        //$req->bindParam(':prenom', $prenom, PDO::PARAM_STR, 10);
        //$req->bindParam(':nom', $nom, PDO::PARAM_STR, 100);
        //$req->bindParam(':mot_de_passe', $password, PDO::PARAM_STR, 100);
        //$req->execute();

 ?>