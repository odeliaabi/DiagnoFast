<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../CSS/MODEL.css" />
         <title>Formulaire professionnel de sante </title>
    </head>
    <body>
    	<div id= "bandeau">  
        <center><strong>FORMULAIRE PROFESSIONEL DE SANTE</strong> </center> 
        </div>
    	<div id= "contenu"> 
        <form action="http://localhost/DiagnoFast/HTML/reception_info_pro.php" method="POST">
        <p></center>
        <h1> <center> Ma fiche de renseignement</center>
        </h1>            </p>
        <center><p><br><br>                        
        <b>Civilité:</b>    <input type="radio" name="civilite" value="M">Monsieur
        <input type="radio" name="civilite" value="Mme">Madame  
        <input type="radio" name="civilite" value="Mlle">Mademoiselle   
            <br><br>
        <b>Nom:</b> <input type="text" name="nom" size="20" maxlength="30" placeholder="EX: ABIZMIL">
            <br><br>
        <b>Prénom:</b>  <input type="text" name="prenom" size="20" maxlength="30" placeholder="EX: Odélia">
            <br><br>
        <b>Nom de votre lieu de travail (établissement de santé) principal :</b>    
        <select name="etablissement1">
            <option value="Hôpital 1">Hôpital 1                                                                  
             <option value="Hôpital 2">Hôpital 2                                                                   <option value="Clinique 1">Clinique 1                                                                 <option value="Clinique 2">Clinique 2                                                                 <option value="Cabinet 1">Cabinet 1                                                                      </select>                         
            <br><br>                        
        <b>Type de l'établissement principal:</b>   
        <input type="radio" name="type" value="Public">Public
         <input type="radio" name="type" value="Privé">Privé 
            <br><br>
        <b>Nom de votre lieu de travail (établissement de santé) secondaire :</b>   
        <select name="etablissement2">                                                                            <option value="Hôpital 1">Hôpital 1                                                                   <option value="Hôpital 2">Hôpital 2                                                                   <option value="Clinique 1">Clinique 1                                                                 <option value="Clinique 2">Clinique 2                                                                 <option value="Cabinet 1">Cabinet 1                                                                  </select>
            <br><br>                        
            <b>Type de l'établissement secondaire:</b>  
        <input type="radio" name="type" value="Public">Public
        <input type="radio" name="type" value="Privé">Privé 
        <br><br>
        <b>Profession(s) exercée(s):</b><br>
        <textarea name="professions" rows="5" cols="50" placeholder="EX: 1) Chirurgien, 2) Cardiologue, 3) ..."></textarea>
        <br><br><p>
        <h1> <center> Coordonnées</center></h1></p>
        <hr><b>Téléphone:</b>
        <input type="text" name="telephone" size="15" maxlength="20" placeholder="EX: 06 01 02 03 04"> <b><em>*Utile pour vous joindre en cas d'urgence*</em></b><br><br>
        <b>Adresse mail:</b>
        <input type="text" name="mail" size="30" maxlength="40" placeholder="EX: odelia.abizmil@gmail.com"> <b><em>*Utile en cas de perte de votre mot de passe*</em></b><br><br>
        <center><input type="submit" value="Enregistrer ma fiche de renseignement"></center></p>
        </center>
        </div>
    </form>
    	<div id= "piedpage">   <div id="contact">
                    <center>Nous contacter: </br>messon.mcdala@gmail.com</center>
                   
                </div>             </div>

    </body>
</html>