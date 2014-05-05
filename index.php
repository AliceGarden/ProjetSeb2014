<?php
/*
Neoterranos & LkY
Page index.php
Index du site.
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
include('includes/config.php'); 
/********Actualisation de la session...**********/
include('includes/fonctions.php');
connexionbdd();
actualiser_session();
/********Fin actualisation de session...**********/
/********Entête et titre de page*********/
$titre = 'Inscription';
include('includes/haut.php'); //contient le doctype, et head.
/**********Fin entête et titre***********/
?>
        <div id="colonne_gauche">
        <?php
        include('includes/colg.php');
        ?>
        </div>
        
        <div id="contenu">
            <br>           
            <h1>Bienvenue !</h1>
            <p>Ce site à pour objectif de facilité les inscription, réinscription et autres pour vos enfants.</p>
			<form name="Inscription" id="Inscription" method="post" action="membres/inscription.php">
			<input type="submit" value="Inscription" />
			</form>
        </div>
        
        <?php
        include('includes/bas.php');
        mysql_close();
        ?>