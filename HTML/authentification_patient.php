<?php
    session_start();
   
    // fichier de connexion a la base de donnée
    require ('../HTML/essaibdd.php');
     
    // cette formulation permet d'eviter l'erreur "undefined index" elle recupere proprement les variables passées dansles superglobales 
    $pass = isset($_POST['mot_de_passe']) ? $_POST['mot_de_passe'] : NULL;
    $mail = isset($_POST['mail']) ? $_POST['mail'] : NULL;

    //test fonctionnement variable session 
    //$_SESSION['mail']=$mail;
    //echo $_SESSION['mail'];

    //Vérification des identifiants
    $req = $connexion->prepare('SELECT * FROM inscription_patient ');
    $req->execute();
    //parcours de la table inscription_patient
    while ($resultat = $req->fetch()) 
    {
                  
        if(($resultat['mail']==$mail)&&($resultat['mot_de_passe']==$pass))
        {
            //echo "connexion reussieee";
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['mail'] =$resultat['mail'];
            $_SESSION['prenom']=$resultat['prenom'];
            //echo $_SESSION['mail'];
            header('Location:profil_patient.php');
            
        }
        
    }
    //session_unset();
    
?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../CSS/MODEL.css" />
        <link rel="stylesheet" href="../CSS/authentification.css" />
         

        <title>Erreur identification</title>
    </head>
    <body>
        <div id= "bandeau">  
            <center>
                <strong>ERREUR IDENTIFICATION </strong> 
            </center> </div>
        <div id= "contenu">  
            <div id= "message"><p>
            <center>
                <em>Vos identifiants ne sont pas corrects !</br></em>
                    Retentez de vous connecter ou inscrivez vous gratuitement si vous venez de nous rejoindre! </br>
                </center>
            </p>
        <br><br>
            <center>
                Pour retouner à la page d'inscription cliquez sur le lien suivant :</br></br></br>

                <center><a target="_blank" href="http://localhost/DiagnoFast/HTML/inscription_patient.php"><input type="submit" value="INSCRIPTION" style=width:200 px></a></center>
        
            </center> 
        <br><br>       
         <br><br>
            <center>

                Pour retouner à la page connexion cliquez sur le lien suivant :
                </br></br></br>
                <center><a target="_blank" href="http://localhost/DiagnoFast/HTML/connexion_patient.php"><input type="submit" value="CONNEXION "style=width:200 px></a></center>
            
        </div>
            </center> 
        <br><br> 
         
        </div>
        <div id= "piedpage">   <div id="contact">
                    <center>Nous contacter: </br>messon.mcdala@gmail.com</center>
                   
        </div>             </div>

    </body>
</html>