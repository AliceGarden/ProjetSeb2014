<?php
/*
Neoterranos & LkY
Page haut.php

Page incluse créant le doctype etc etc.

Quelques indications : (utiliser l'outil de recherche et rechercher les mentions données)

Liste des fonctions :
--------------------------
Aucune fonction
--------------------------


Liste des informations/erreurs :
--------------------------
Aucune information/erreur
--------------------------
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
	<?php
	/**********Vérification du titre...*************/
	
	if(isset($titre) && trim($titre) != '')
	$titre = $titre.' : '.TITRESITE;
	
	else
	$titre = TITRESITE;
	
	/***********Fin vérification titre...************/
	?>
		<title><?php echo $titre; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="language" content="fr" />
		<link rel="stylesheet" title="Design" href="<?php echo ROOTPATH; ?>/design.css" type="text/css" media="screen" />
	</head>


	<body>
		<div id="banniere">
			<a href="<?php echo ROOTPATH;?>/index.php"><img src="<?php echo ROOTPATH; ?>/images/banniere.jpg"/></a>
		</div>
		
		<div id="menu">
			<div id="menu_gauche">
			
			</div>
			
			<div id="menu_droite">
			<?php
			if(isset($_SESSION['id_pseudo']))
			{
			?>
				<a href="<?php echo ROOTPATH; ?>/membres/moncompte.php">Gérer mon compte</a>   <a href="<?php echo ROOTPATH; ?>/membres/deconnexion.php">Se déconnecter</a>
			<?php
			}
			
			else
			{
			?>
				<form name="connexion" id="connexion" method="post" action="<?php echo ROOTPATH; ?>/membres/connexion.php">
				<fieldset><legend>Connexion</legend>
					<label for="pseudo" class="float">Pseudo :</label> <input type="text" name="pseudo" id="pseudo" value="<?php if(isset($_SESSION['connexion_pseudo'])) echo $_SESSION['connexion_pseudo']; ?>"/>
					<label for="password" class="float">Passe :</label> <input type="password" name="password" id="password"/>
					<input type="hidden" name="validate" id="validate" value="ok"/>
					<input type="checkbox" name="cookie" id="cookie"/> <label for="cookie">Connexion auto</label>
					<div class="center"><input type="submit" value="Connexion" /></div>
				</fieldset>
			</form>
			<?php
			}
			?>
			</div>
		</div>