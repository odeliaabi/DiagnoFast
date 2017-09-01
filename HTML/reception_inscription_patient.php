<?php
// fichier de connexion a la base de donnée
require ('../HTML/essaibdd.php');
//require ('../HTML/securite_bdd.php');
///on verifie que tous les elements du formulaire on ete envoye

if(isset($_POST['form_inscription']))
{
   //TEST :echo "ok";
	if(!empty($_POST['nom'])AND!empty($_POST['prenom'])AND !empty($_POST['secu'])
		AND !empty($_POST['mot_de_passe'])AND !empty($_POST['mot_de_passe1'])AND !empty($_POST['mail'])
		AND !empty($_POST['mail2']))
		{
		    //reception info formulaire
		    //html specialchars protege contre l'insertion de caracteres speciaux 
			
			//$secu=($_POST['secu']);
			//hachage du mot de passe dan sla base de données
			$pass=($_POST['mot_de_passe']);
			$pass1=($_POST['mot_de_passe1']);
			$mail=($_POST['mail']);
			$mail1=($_POST['mail2']);
            $nom=strlen($_POST['nom']);
			$prenom=strlen($_POST['prenom']);
			$secu=($_POST['secu']);
			// reception des donnes du formulaire 
            //$num_secu1=$_POST['secu1'];
			//$num_secu2=$_POST['secu2'];
			//$num_secu3=$_POST['secu3'];
			//$num_secu4=$_POST['secu4'];
			//$num_secu5=$_POST['secu5'];
			//$num_secu6=$_POST['secu6'];
			//$num_secu7=$_POST['secu7'];
			//$num_secu8=$_POST['secu8'];
			//TES OK
			//echo $secu;
			//echo $pass;
			//echo $mail;
			//echo $nom;
			//echo $prenom;
			if(($nom<=200)&&($prenom<=200))
			{
				if($pass==$pass1)
				{
                   //on filtre et prend une des deux valeurs dans le mail
					// et on verifie que c'est bien un mail 
				if(filter_var($mail,FILTER_VALIDATE_EMAIL))
			    {
                     if ($mail==$mail1)
                     {
                     //création de la requête SQL:
					$sql = $connexion->prepare("INSERT INTO inscription_patient (`nom`, `prenom`,`num_secu`,`mot_de_passe`,`mail`) VALUES (:nom, :prenom,:num_secu,:mot_de_passe,:mail)");
					$sql->bindParam(':nom', $nom, PDO::PARAM_STR);
					$sql->bindParam(':prenom', $prenom, PDO::PARAM_STR);
					$sql->bindParam(':num_secu', $secu, PDO::PARAM_INT);
					$sql->bindParam(':mot_de_passe', $pass, PDO::PARAM_INT);					
                    $sql->bindParam(':mail', $mail, PDO::PARAM_STR);
				    $sql->execute();
				    //$sql1=$connexion->prepare("INSERT INTO secu VALUES (:num_secu1,:num_secu2,:num_secu3,:num_secu4,:num_secu5,:num_secu6,:num_secu7,num_secu8)");
				    //$sql1->bindParam(':num_secu1', $num_secu1, PDO::PARAM_INT);
                    //$sql1->bindParam(':num_secu2', $num_secu2, PDO::PARAM_INT);
                    //$sql1->bindParam(':num_secu3', $num_secu3, PDO::PARAM_INT);
                    //$sql1->bindParam(':num_secu4', $num_secu4, PDO::PARAM_INT);
                    //$sql1->bindParam(':num_secu5', $num_secu5, PDO::PARAM_INT);
                    //$sql1->bindParam(':num_secu6', $num_secu6, PDO::PARAM_INT);
                    //$sql1->bindParam(':num_secu7', $num_secu7, PDO::PARAM_INT);
                    //$sql1->bindParam(':num_secu8', $num_secu8, PDO::PARAM_INT);
                    //$sql1->execute();
                   
				    //redirection vers a page initiale une fois l'operation effectuee
					header('Location:confirmation_inscription_patient.php');
                    }
               
                   	else
                   	{
                   		echo "vos mots de passe de correspondent pas!";}
				    }
				}
			    else
                {
                echo "votre adresse mail n'est pas valide";
                }
                }
			else
            {
              echo "vos adresses mails ne correspondent pas !";
            }
		}

	}
	else 
	{
		echo $erreur="tous les champs doivent être remplis!";
    }







?>
