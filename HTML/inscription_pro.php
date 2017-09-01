<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../CSS/MODEL.css" />
       <link rel="stylesheet" href="../CSS/inscription_pro.css" />
        
        <title> Inscription pro</title>
    </head>

    <body>
        
        <div id= "bandeau">
            <center><strong>INSCRIPTION PRO</strong>
            </center> <br>
        </div>
        
        <div id= "contenu">   
            <form action="../HTML/reception_inscription_pro.php" method="post">
            <div id= "formulaire">  
            <p>
            <br><br>                        
            <b>Civilité:</b>    <input type="radio" name="civilite" value="M">Monsieur
                    <input type="radio" name="civilite" value="Mme">Madame  
                    <input type="radio" name="civilite" value="Mlle">Mademoiselle   
            <br><br>
            <b>Nom:</b> <input type="text" name="nom" size="20" maxlength="30" placeholder="EX: ABIZMIL">
            <br><br>
            <b>Prénom:</b>  <input type="text" name="prenom" size="20" maxlength="30" placeholder="EX: Odélia">
            <br><br>
            <b>Numéro de licence professionnelle:</b>   <input type="text" name="licence" size="25" maxlength="30" placeholder="EX: 00112233445566778899">
            <br><br>
            <b>Saisissez un mot de passe <em>( 8 caractères MAXIMUM )</em>:</b> <input type="password" name="mot_de_passe" SIZE="10" MAXLENGTH="20" placeholder="EX: Password">
            <br><br>
            <b>Confirmez votre mot de passe <em>( 8 caractères MAXIMUM )</em>:</b> <input type="password" name="mot_de_passe1" SIZE="10" MAXLENGTH="20" placeholder="EX: Password">
            <br>
            <center> <a target="_blank" href="../HTML/confirmation_inscription_pro.php">
            <input type="submit" value="TERMINER"></a>
            </center>
            </p>
        </div></form></div>
        <div id= "piedpage">   
            <div id="contact">
                    <center>Nous contacter: </br>messon.mcdala@gmail.com</center>
                   
             </div>   
        </div> 
</body>

</html>