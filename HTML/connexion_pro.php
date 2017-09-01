<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../CSS/MODEL.css" />
         <link rel="stylesheet" href="../CSS/connexion_patient.css" />
         

        <title>Connexion pro</title>
    </head>
    <body>
    	<div id= "bandeau">  <center> <strong>CONNEXION PRO  </strong> </center>          </div>
    	<div id= "contenu"> 

            <div id="formulaire">
                <form action="http://localhost/DiagnoFast/HTML/authentification_pro.php" method="post">
                <p>                     
           
                <b>Nom:</b> <input type="text" name="nom" size="20" maxlength="30" placeholder="EX: ABIZMIL">
                <br><br>
                 <b>Prénom:</b>  <input type="text" name="prenom" size="20" maxlength="30" placeholder="EX: Odélia">
                <br><br>
                <b>Numéro de licence professionnelle:</b>   <input type="text" name="licence" size="25" maxlength="30" placeholder="EX: 00112233445566778899">
                <br><br>
                <b>Saisissez votre mot de passe:</b> <input type="password" name="pass" SIZE="10" MAXLENGTH="20" placeholder="EX: Password">
                <br>
                       
                <div id="bouton"> 
                <center><a target="_blank" href="http://localhost/DiagnoFast/HTML/profil_pro.php"><input type="submit" value="ACCEDER A MON PROFIL "></a></center>
                </div>
                 </p>
             </form>
            </div>
        </div>  
      
    	<div id= "piedpage">   <center>Nous contacter: </br>messon.mcdala@gmail.com</center>             </div>

    </body>
</html>