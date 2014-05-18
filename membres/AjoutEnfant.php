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
					<fieldset><legend>Ajout d'Enfant</legend>
						<label for="Id_National"> Id National :</label> <input type="text" name="Id_National" id="Id_National"/><br/>
						<label for="Nom" class="float">Nom :</label> <input type="text" name="Nom" id="Nom"/><br/>
						<label for="Prenom" class="float">Prenom :</label> <input type="text" name="Prenom" id="Prenom" /><br/>
						<label for="Date" class="float">Date de naissance :</label> <input type="text" name="Date" id="Date" placeholder="Format : dd/mm/yyyy" /><br/>
						<label for="Pays" class="float">Pays d'origine :</label>
							<select name="pays" id="pays">
							   <option value="france">France</option>
							   <option value="espagne">Espagne</option>
							   <option value="italie">Italie</option>
							   <option value="royaume-uni">Royaume-Uni</option>
							   <option value="canada">Canada</option>
							   <option value="etats-unis">États-Unis</option>
							   <option value="chine">Chine</option>
							   <option value="japon">Japon</option>
						   </select><br/>
						<label for="Sexe"> Sexe de l'enfant :	<input type="radio" name="Sexe" value="0" id="Garçon" /> <label for="moins15">Garçon</label>
																<input type="radio" name="Sexe" value="1" id="Fille" /> <label for="medium15-25">Fille</label><br />
						<label for="Doublement">Redoublement ?</label> <input type="checkbox" name="Doublement" id="Doublement"/> <br/>
						<label for="SMS">Accepte les SMS ?</label> <input type="checkbox" name="SMS" id="SMS"/> <br/>
						<label for="Transport">Adhession au transport ?</label> <input type="checkbox" name="Transport" id="Transport"/> <br/>
						<input type="hidden" name="validate" id="validate" value="ok"/>
						<div class="center"><input type="submit" value="Ajout" /></div>
					</fieldset>
				</form>
        </div>
        
        <?php
        include('../includes/bas.php');
        mysql_close();
        ?>