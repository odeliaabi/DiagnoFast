
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../CSS/MODEL.css" />
        <link rel="stylesheet" href="../CSS/inscription_patient.css" />
         
        <title>Inscription Patient</title>
    </head>
    <body>
    	<div id= "bandeau">
            <center><strong> INSCRIPTION AU PROFIL PATIENT</strong></center>    
        </div>
    	<div id= "contenu"> 
            <form action="http://localhost/DiagnoFast/HTML/reception_inscription_patient.php" method="post">
            
            <div id="formulaire">
                <form>
          <p> <br>                        
            <b>Civilité:</b> 
                <input type="radio" name="civilite" value="M">Monsieur
                <input type="radio" name="civilite" value="Mme">Madame  
                <input type="radio" name="civilite" value="Mlle"> Mademoiselle   
            <br><br>
            <b>Nom:</b> <input type="text" name="nom" size="20" maxlength="30" placeholder="EX: ABIZMIL">
            <b><b>
            <b>Prénom:</b>  <input type="text" name="prenom" size="20" maxlength="30" placeholder="EX: Odélia">
            <br><br>
             <b>Numéro de sécu: <em>( 15 caractères OBLIGATOIRES )</em></b></br>
            <input type="text" name="secu" size="6" maxlength="15" >
            <input type="text" name="secu1" size="6" maxlength="15" >
            <input type="text" name="secu2" size="8" maxlength="15" >
            <input type="text" name="secu3" size="8" maxlength="15" >
            <input type="text" name="secu4" size="8" maxlength="15" >
            <input type="text" name="secu5" size="8" maxlength="15" >
            <input type="text" name="secu6" size="8" maxlength="15" >
            <input type="text" name="secu7" size="8" maxlength="15" >
            <input type="text" name="secu8" size="8" maxlength="15" >
            <br><br>
            <b>Saisissez un mot de passe <em>( 8 caractères MAXIMUM )</em>:</b> <input type="password" name="mot de passe" SIZE="10" MAXLENGTH="20" placeholder="EX: Password">
            <br><br>
            <b>Confirmez votre mot de passe <em>( 8 caractères MAXIMUM )</em>:</b> <input type="password" name="mot de passe1" SIZE="10" MAXLENGTH="20" placeholder="EX: Password">
            <br><br>
            <b>Adresse mail:</b>
            <input type="mail" name="mail" size="30" maxlength="40" placeholder="EX: odelia.abizmil@gmail.com"> <em>*Utile en cas de perte de votre mot de passe*</em>
            <br><br>
             <b>Confirmez votre adresse mail:</b>
            <input type="mail" name="mail2" size="30" maxlength="40" placeholder="EX: odelia.abizmil@gmail.com"> <em>*Utile en cas de perte de votre mot de passe*</em>
            <br>
            <div id="bouton"> 
                <center> <a target="_blank" href="../HTML/confirmation_inscription_patient.php">
                <input type="submit" name="form_inscription" value="TERMINER"></a>
                </center>
            </div>
        </p></form>
      
            </div>
            </div>
    	<div id= "piedpage">  <div id="contact">
                    <center>Nous contacter: </br>messon.mcdala@gmail.com</center>
                   
                </div>  </div>

    </body>
</html>
