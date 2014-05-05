<?php

session_start();
header('Content-type: text/html; charset=utf-8');
include('../includes/config.php');
/********Actualisation de la session...**********/
include('../includes/fonctions.php');
connexionbdd();
actualiser_session();
/********Fin actualisation de session...**********/
/********Entête et titre de page*********/
$titre = 'Nouvel Enfant';
include('../includes/haut.php'); //contient le doctype, et head.
/**********Fin entête et titre***********/
?>
        <div id="colonne_gauche">
        <?php
        include('../includes/colg.php');
        ?>
        </div>
        
        <div id="contenu">
			<br>
				<h1> Formulaire d'ajout d'enfant </h1>
				<form name="Ajout" id="Ajout" method="post" action="enfants.php">
					<fieldset><legend>Connexion</legend>
						<label for="Nom" class="float">Nom :</label> <input type="text" name="Nom" id="Nom" value=""/><br/>
						<label for="Prenom" class="float">Prenom :</label> <input type="text" name="Prenom" id="Prenom"/><br/>
						<label for="Date" class="float">Date de naissance :</label> <input type="text" name="Date" id="Date"/><br/>
						<input type="hidden" name="validate" id="validate" value="ok"/>
						<div class="center"><input type="submit" value="Connexion" /></div>
					</fieldset>
				</form>
        </div>
        
        <?php
        include('../includes/bas.php');
        mysql_close();
        ?>