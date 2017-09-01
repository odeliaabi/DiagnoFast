<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../CSS/MODEL.css" />
         <link rel="stylesheet" href="../CSS/connexion_patient.css" />
         

        <title>Connexion patient</title>
    </head>
    <body>
    	<div id= "bandeau">  <center> <strong>CONNEXION PATIENT  </strong> </center>          </div>
    	<div id= "contenu"> 

            <div id="formulaire">
                <form action="http://localhost/DiagnoFast/HTML/authentification_patient.php" method="post">
                <p>                     
           
                
                <b>Mail:</b>  <input type="mail" name="mail" size="20" maxlength="30" placeholder="EX: Odélia.abizmil@gmail.com">
                <br><br>
                 <b>Numéro de sécurité sociale:</b>  <input type="text" name="secu" size="20" maxlength="15" placeholder="EX:295057511953361">
                <br><br>
                <b>Saisissez votre mot de passe:</b> <input type="password" name="mot_de_passe" SIZE="10" MAXLENGTH="20" placeholder="EX: Password">
                <br><br>
     
                <div id="bouton">
                
                 <center><a target="_blank" href="http://localhost/DiagnoFast/HTML/authentification_patient.php"><input type="submit" value="ACCEDER A MON PROFIL "></a></center>
               
           
                </div>
                 </p>
            </form>
                </php>
            </div>
        </div>  
      
    	<div id= "piedpage">               </div>

    </body>
</html>
