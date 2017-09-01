 <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="../CSS/patient_formulaire_administratif.css"/>
		<link rel="stylesheet" href="../CSS/MODEL.css"/>
        <title>Formulaire_administratif</title>
    </head>

<body>

<div id= "bandeau">               
		<center><strong>MES RENSEIGNEMENTS ADMINISTRATIFS </strong></center>
</div>
<div id= "contenu"> 
	<div class="c1">
	   <section>
			<aside>
							
				<p><img src="../IMAGES/photo.jpg" alt ="espace_photo_patient" /></p>
			<aside>
			</section>
			<section>
			
				
				<p> <a href = "doc_num.html" title = "carte d'identité, passeport, autre..."target = "_blank"><h3>Espace documents numérisés</h3> </a> 
				</p>
			</section>
			
			
			</div>
			<div class="c2">
			<h3>Formulaire</h3>
	<form method="post" action="http://localhost/DiagnoFast/HTML/reception_patient_formulaire_administratif.php">
	<section>
		
		
		<p>
		Etat Civil <br />
       <input type="radio" name="civil" value="celib" id="celib" /> <label for="celib">célibataire</label><br />
       <input type="radio" name="civil" value="marie" id="marie" /> <label for="marie">marié(e)</label><br />
       
		
       <label for="nom">Nom </label>
	   <br />
       <input type="text" name="nom" id="nom" />
       
       <br />
       <label for="prenom">Prénom</label>
	   <br />
       <input type="text" name="prenom" id="prenom" />
	   
	   <br />
	   <label for="dateN">Date de naissance </label>
	   <br />
	  <?php //<input type="date" name="dateN" id ="dateN"/>
	   ?>
	   <input type="text" name="dateN" id="dateN" />
	   <br />
	   <label for="lieuN">Lieu de Naissance </label>
	   <br />
       <input type="text" name="lieuN" id="lieuN" />
	   
	   <br />
	   <label for="adresse">Adresse</label>
	   <br />
	   <textarea name="adresse" id="adresse" rows="8" cols="20">
       </textarea>    
	   
	    <br />
       <label for="num">Numéro de téléphone</label>
	   <br />
       <input type="tel" name="num" id="num" />
	   
	   <br />
	   <label for="age">Age </label>
	   <br />
       <input type="number" name="age" id="age" />
	   
	  
	   <p>...</p>
	   </section>
	   
		<section>
		<div class="Personne_contact">
		<p>Personne à Contacter</p>	   
	  
	   <label for="nom1">Nom </label>
	   <br />
       <input type="text" name="nom1" id="nom1" />
	   
	    <br />
       <label for="prenom1">Prénom</label>
	   <br />
       <input type="text" name="prenom1" id="prenom1" />
	   
	   <br />
	   <label for="adresse1">Adresse</label>
	   <br />
	   <textarea name="adresse1" id="adresse1" rows="8" cols="20">
       </textarea>   
	   
	   <br />
       <label for="num1">Numéro de téléphone</label>
	   <br />
       <input type="tel" name="num1" id="num1" />
	  
	    </p>
		</div>
		</section>
		
		<section>
		<div class="Regim_secu">
		
							
	  <label for="secu">Régime de Sécurité Sociale</label><br />
       <select name="secu" id="secu">
           <option value="etudiant">Etudiant</option>
           <option value="salarie" selected>Activité Salariée</option>
           <option value="salarie_spe">Régime Salarié spécifique </option>
           <option value="agricole">Activité Agricole
		</option>
           <option value="indep">Activité indépendante</option>
           <option value="militaire">Militaire</option>
           <option value="fonctionnaire">Fonctionnaire</option>
		   
		 </select>
		 
		 <br />
	   <label for="num_cv">Numéro de carte Vitale </label>
	   <br />
       <input type="number" name="num_cv" id="num_cv" />
           
	   <p> Si vous n'avez pas de numéro de carte vitale veuillez préciser:
		
		<br/><input type="radio" name="cv" value="autre" id="autre" /> <label for="autre">je suis sous celle quelqu'un d'autre</label><br />
       <input type="radio" name="cv" value="non" id="non" /> <label for="non">je n'en ai pas </label><br />
	   </p>
		<p>
		<label for="tiersP"><br/>Tiers Payant couvet par :</label><br />
       <select name="tiersP" id="tiersP">
           
		   <option value="cpam" >CPAM</option>
           <option value="enim" >ENIM</option>
           <option value="canssm">CANSSM</option>
           <option value="cpr_sncf">CPR SNCF
		</option>
           <option value="ratp">RATP</option>
           <option value="camieg">CAMIEG</option>
           <option value="cpm_bdf">CPM Banque de France</option>
		   <option value="msa">MSA</option>
		   <option value="rsi">RSI</option>
		   <option value="cnmss">CNMSS</option>
		   <option value="slm">SLM</option>
		   <option value="mfps">MFPS</option>
		   <option value="mutuelle">autre/mutuelle...</option>
		   
           
       </select>
	   </p>
	    
	    
		
		
		 <p>
		Bénéficiaire de:<br />
       <input type="checkbox" name="cmu" id="cmu" /> <label for="cmu">CMU</label><br />
       <input type="checkbox" name="ame" id="ame" /> <label for="ame">AME</label>
        </label> 
	   	</p>
		</div>
		</section>
  
           <div id="bouton"> 
               <center>
                <input type="submit" value="TERMINER">
                </center>
            </div>
  </form>
 </div>
 </div>


<div id= "piedpage">              
		<center>	<p>Copyright Mesonn - Tous droits réservés     </br>
            <a href="mailto:messon.mcdala@gmail.com">nous contacter !</a></p>
        </center>	
 </div>


</body>