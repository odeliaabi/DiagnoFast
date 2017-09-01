<?php
    session_start();
   
    // fichier de connexion a la base de donnée
    require ('../HTML/essaibdd.php');
     
    // cette formulation permet d'eviter l'erreur "undefined index" elle recupere proprement les variables passées dansles superglobales 
    $pass = isset($_POST['pass']) ? $_POST['pass'] : NULL;
    $nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
    $licence = isset($_POST['licence']) ? $_POST['licence'] : NULL;

    // test fonctionnement passage des infos du formulaire dans la methode POST
    //echo $pass; echo $nom; echo $prenom; echo $licence; => ok marche

    //test fonctionnement variable session 
    //$_SESSION['nom']=$nom;
    //$_SESSION['prenom']=$prenom;

    //echo $_SESSION['nom'];=> ok marche 

    //Vérification des identifiants
    $req = $connexion->prepare('SELECT * FROM inscription_professionnel ');
    $req->execute();
    //parcours de la table inscription_pro
    while ($resultat = $req->fetch()) 
    {
        
       //if (($resultat['licence']==$licence)&&($resultat['mdp_professionel']==$pass))
        if (($resultat['licence']==$licence)&&($resultat['mdp_professionel']==$pass))
        {
           //echo "vous etes bien inscrit";
            $_SESSION['licence']=$resultat['licence'];
            $_SESSION['nom'] = $resultat['nom_profesionnel'];
            $_SESSION['prenom'] =$resultat['prenom_professionel'];
            //echo $_SESSION['nom'];
            //echo $_SESSION['prenom'];
            header('Location:profil_pro.php');
        }
        
        
    }
    
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
                <em>Vos identifiants ne sont pas corrects !</br>
                    Retentez de vous connecter ou inscrivez vous gratuitement si vous venez de nous rejoindre! </br>
                Vos identifiants ne sont pas corrects !<em/></center>
            </p>
        <br><br>
            <center>
                Pour retouner à la page d'inscription cliquez sur le lien suivant :
                </br></br></br>
                <center><a target="_blank" href="http://localhost/DiagnoFast/HTML/inscription_pro.php"><input type="submit" value="INSCRIPTION "style=width:200 px></a></center>
        
            </center> 
        <br><br>       
         <br><br>
            <center>
                Pour retouner à la page connexion cliquez sur le lien suivant :
                </br></br></br>
                <center><a target="_blank" href="http://localhost/DiagnoFast/HTML/connexion_pro.php"><input type="submit" value="CONNEXION "style=width:200 px></a></center>
        </div>
            </center> 
        <br><br> 
         
        </div>
        <div id= "piedpage">   <div id="contact">
                    <center>Nous contacter: </br>messon.mcdala@gmail.com</center>
                   
        </div>             </div>

    </body>
</html>