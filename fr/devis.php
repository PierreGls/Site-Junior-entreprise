<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Artemis</title>
	<link href="../style/style.css" type="text/css" rel="stylesheet">

	
	<script type="text/javascript" src="../js/jquery-2.0.3.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
	
	<script>
	$( window ).on( "load", function() {
		//pour égaliser les hauteurs des 2 divs
		//avec le background-color, ca fait pas bien sinon
		$("#devisExplication").css("height",$("#devisForm").height());
		
		$("#envoiDemande").on("click", function( event ) {
			envoiMail();
		});
		
		function valeurParDefault(stringNom){
			return false;
		};
		
		//one permet d'effectuer la fonction qu'au premier click
		$("input").one('click',function(){
			//if(valeurParDefault(this.value)){
				this.value="";
			//};
		});
	});
	</script>

	<div id="barreMenu">
		<img src="../img/logo_artemis.png">
		<div class="buttonMenu" id="selected"> Tentez l'expérience </div>
		<a href="missions.html"><div class="buttonMenu"> Missions </div></a>
		<a href="ecole.html"><div class="buttonMenu"> L'Ecole </div></a>
		<a href="junior.html"><div class="buttonMenu"> La Junior </div></a>
		<a href="../index.html"><div class="buttonMenu"> Accueil </div></a>
	</div>
	
	  
	<div id="devisExplication">
		<p>Explication du déroulement du projet</p>
	</div>
	
	<div id="devisForm">
		<form>
			<h1>Quel est votre souhait ?</h1>
			<p>Nom*</p>
			<input type="text" name="firstname" value="Capitaine Flam" required>
			<p>Email*</p>
			<input type="text" name="mail" value="*****@monemail.fr" required>
			<p>Societe</p>
			<input type="text" name="company" value="Entrez votre société">
			<p>Numero de téléphone</p>
			<input type="tel" name="phoneNumber" value="06********">
			<p>Texte explicatif*</p>
			<input type="text" style="height:100px" name="explication" value="Je vous contacte pour..." required>
			<p>Votre deadline (si votre projet en contient une)</p>
			<input type="date" name="deadline" value="2018-01-01" >
			<p>attacher un dossier</p>
			
			<input id="envoiDemande" type="submit" value="Envoyer ma demande">
		</form>
	</div>
	
	<?php
     /*
	 $to      = 'personne@example.com';
     $subject = 'le sujet';
     $message = 'Bonjour !';
     $headers = 'From: webmaster@example.com' . "\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);*/
	 
	 function envoiMail(){
		$to      = 'pierre.galus@live.fr';
		$subject = 'le sujet';
		$message = 'Bonjour !';
		$headers = 'From: webmaster@example.com' . "\r\n" .
		'Reply-To: webmaster@example.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers);
	 }
	 
	?>
	
	
	<footer>
		<div> 
			<img src="../img/logo_artemis.png">
		</div>
		<div class="aveccadre">
			<p class="titreFooter">Nous suivre</p>
			<div class="reseauSociaux">
				<a href="https://www.facebook.com/Artemis.Junior.Consulting" target="_blank"><img src="../img/iconeFacebook.png">
				<p> Facebook</p></a>
			</div>
			<div class="reseauSociaux">
				<img src="../img/iconeLinkedin.png">
				<p>LinkedIn</p>
			</div>
		</div>
		<div class="aveccadre"> 
			<p class="titreFooter">Nous contacter</p>
			<p>Artémis </br></br>Adresse : 263 rue du grand bail, Douai 59500 </br> Numéro de télephone : </br> email : </p>
		</div>
		<div>
			<a href="devis.html" id="anchorButtonFooter"><p id="buttonFooter">Tentez l'expérience !</p></a>
		</div>
		
		<p> Copyright 2018 Artémis. Tous droits réservés </p>
	</footer>
</body>
</html>