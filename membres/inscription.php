<?php
/*
Neoterranos & LkY
Page inscription.php

Permet de s'inscrire.

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

session_start();
header('Content-type: text/html; charset=utf-8');
include('../includes/config.php');
?>
<?php
/********Actualisation de la session...**********/

include('../includes/fonctions.php');
connexionbdd();
actualiser_session();

/********Fin actualisation de session...**********/
?>
<?php
if(isset($_SESSION['membre_id']))
{
	header('Location: '.ROOTPATH.'/index.php');
	exit();
}
?>
<?php
/********Entête et titre de page*********/

$titre = 'Inscription 1/2';

include('../includes/haut.php'); //contient le doctype, et head.

/**********Fin entête et titre***********/
?>
<!--Colonne gauche-->
		<div id="colonne_gauche">
		<?php
		include('../includes/colg.php');
		?>
		</div>
<!--Contenu-->
		<div id="contenu">
			<div id="map">
				<a href="../index.php">Accueil</a> => <a href="inscription.php">Inscription 1/2</a>
			</div>
			
			<h1>Formulaire d'inscription</h1>
			<p>Bienvenue sur la page d'inscription de mon site !<br/>
			Merci de remplir ces champs pour continuer.</p>
			<form action="NEWtrait-inscription.php" method="post" name="Inscription">
				<fieldset><legend>Identifiants</legend>
					<label for="pseudo" class="float">Pseudo :</label> <input type="text" name="pseudo" id="pseudo" size="30" /> <em>(compris entre 3 et 32 caractères)</em><br />
					<label for="mdp" class="float">Mot de passe :</label> <input type="password" name="mdp" id="mdp" size="30" /> <em>(compris entre 4 et 50 caractères)</em><br />
					<label for="mdp_verif" class="float">Mot de passe (vérification) :</label> <input type="password" name="mdp_verif" id="mdp_verif" size="30" /><br />					
					<label for="Civilite" class="float">Civilité</label> 
						<select name="Civilite" id="Civilite">
							   <option value="Mlle">Mademoiselle</option>
							   <option value="Mme">Madame</option>
							   <option value="M">Monsieur</option>
						</select><br/>	
					<label for="Nom" class="float">Nom :</label> <input type="text" name="Nom" id="Nom" size="30" /><br />
					<label for="Prénom" class="float">Prénom :</label> <input type="text" name="Prénom" id="Prénom" size="30" /><br />
					<!--
					<label for="mail" class="float">Mail :</label> <input type="text" name="mail" id="mail" size="30" /> <br />
					<label for="mail_verif" class="float">Mail (vérification) :</label> <input type="text" name="mail_verif" id="mail_verif" size="30" /><br />				
					-->
					<div class="center"><input type="submit" value="Inscription" /></div>
				</fieldset>
			</form>
		</div>
	<!--bas-->
		<?php
		include('../includes/bas.php');
		mysql_close();
		?>