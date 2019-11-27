<!DOCTYPE html>
<html lang="fr">
  <head>
		<meta charset="utf-8">
		<title>Unisocium/Accueil.fr</title>
		<!-- Lien vers mon CSS -->
		<link href="css/monStyleScreen.css" type="text/css" rel="stylesheet" media="screen">
		<link href="css/monStylePrint.css" type="text/css" rel="stylesheet" media="print">
		<link href="css/monStyleMediar.css" type="text/css" rel="stylesheet" media="media">
		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="fontawesome/css/all.css" rel="stylesheet">

   </head>
   <body>
		<!-- Entête -->
		<div class = "container">
			<div class = "row">
				<!-- menu dans une case, ne s'affiche pas en écran d'ordinateur -->
				<div class = "col-md-1 col-sm-2 hidden-xs">
					<img src="images/logo.png" alt="Logo unisocium"/>
				</div>
				<div class = "col-md-10 col-sm-6 col-xs-8">
					<h1>Unisocium</h1><br/>
					TODO : Slogan de l'association
				</div>
				<div class = "hidden-lg hidden-md col-sm-2 col-xs-2">
					<div class="toggle_btn">
					   <span></span>
					</div>
					<div class="menu nav">
						<ul>
							<!-- FAIRE MENU DEROULANT DE TOUS LES ELEMENTS -->
							<li> <a href="#" class="logo">Mon logo</a></li>
							<li> <a href="#">Accueil</a></li>
							<li> <a href="#">Offres de stage</a> </li>
							<li> <select class="menu" onChange="document.location=this.options[this.selectedIndex].value">
									<option value="#" selected hidden>Evènement</option>
	        						<option value="#">Evènement à venir</option>
	        						<option value="#">Evènement passés</option>
      						</select> </li>
							<li> <a href="#">Convoiturage</a> </li>
							<li> <a href="#">Nos partenaires</a> </li>
							<li> <a href="#">Qui sommes-nous ?</a> </li>
						</ul>
					</div>
					<script type="text/javascript" src="js/app.js"></script>
				</div>
				<div class = "col-md-1 col-sm-2 col-xs-2">	
					<button type="submit" class="btn btn-primary btn-sm"><span class="fa fa-user"></span><br/> Connexion</button>
				</div>
			</div>
			<div class = "row">
				<!-- Menu de navigation -->
				<div class="navbar navbar-inverse">
					<ul class="nav navbar-nav">
						<li class="active"> <a href="#">Accueil</a></li>
						<li> <a href="#">Offres de stage</a> </li>
						<li> <select onChange="document.location=this.options[this.selectedIndex].value">
									<option value="#" selected hidden>Evènement</option>
	        						<option value="#">Evènement à venir</option>
	        						<option value="#">Evènement passés</option>
      						</select>
						<li> <a href="#">Convoiturage</a> </li>
						<li> <a href="#">Nos partenaires</a> </li>
						<li> <a href="#">Qui sommes-nous ?</a> </li>
		            </ul>
		        </div>
			</div>
		</div>
		<!-- Menu de navigation sur toute la longueur
		<div class="navbar navbar-inverse">
		  <ul class="nav navbar-nav">
			  <li class="active"> <a href="#">Accueil</a></li>
			  <li> <a href="#">Offres de stage</a> </li>
			  <li> <a href="#">Evènements</a> </li>
			  <li> <a href="#">Convoiturage</a> </li>
			  <li> <a href="#">Nos partenaires</a> </li>
			  <li> <a href="#">Qui sommes-nous ?</a> </li>
		  </ul>
		</div>
		-->
		<div class = "container">
			<form class="form-horizontal">
				<fieldset>

					<!-- Itinéraire -->
					<legend>Itinéraire</legend>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="depart">D'où partez-vous ?</label>  
					  <div class="col-md-6">
					  <input id="depart" name="depart" type="text" placeholder="Exemple : 50 Avenue de Bordeaux" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="ARRIVER">Où allez-vous ?</label>
					  <div class="col-md-6">
					  <input id="ARRIVER" name="ARRIVER" type="text" placeholder="Exemple : 50 Avenue de Bordeaux" class="form-control input-md" required="">
					    
					  </div>
					</div>

				</fieldset>

				<fieldset>

					<!-- Dates et heures -->
					<legend>Dates et heures</legend>

					<!-- Date input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="ARRIVER">Date de l'aller :</label>
					  <div class="col-md-6">
					  <input id="DATE" name="DATE" type="Date" required="">
					    
					  </div>
					</div>
					<!-- Time input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="ARRIVER">Heure de l'aller :</label>
					  <div class="col-md-6">
					  <input id="DATE" name="DATE" type="Time" required="">
					    
					  </div>
					</div>

				</fieldset>
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="validation button"></label>
				  <div class="col-md-4">
				    <button id="validation button" name="validation button" class="btn btn-success">Valider</button>
				  </div>
				</div>
			</form>

		</div>

		<!-- Pied de page -->
		<div class = "container">
			<div class = "row">
				<div class = "col-xs-6">
					Nous rejoindre :
				</div>
				<div class = "col-xs-6">
					Nous contacter :
				</div>
			</div>
			<div class = "row">
				<div class = "col-md-2 col-sm-2 col-xs-6">
					<span class="fab fa-twitter"></span><br/>
					Twitter association
				</div>
				<div class = "col-md-2 col-sm-2 col-xs-6">
					<span class="fab fa-facebook"></span><br/>
					Facebook association
				</div>
				<div class = "col-md-2 col-sm-2 col-xs-6">
					<span class="fas fa-user-graduate"></span><br/>
					IUT Figeac
				</div>
				<div class = "col-md-2 col-sm-2 col-xs-6">
					<span class="fas fa-envelope"></span><br/>
					Mail association
				</div>
				<div class = "col-md-2 col-sm-2 col-xs-6">
					<span class="fa fa-phone"></span><br/>
					0651567415
				</div>
				<div class = "col-md-2 col-sm-2 col-xs-6">
					<span class="fas fa-home"></span><br/>
					Adresse Association
				</div>
			</div>
		</div>
   </body>
</html>