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
$titre = 'Enfant';
include('../includes/haut.php'); //contient le doctype, et head.
/**********Fin entête et titre***********/
?>
        <div id="colonne_gauche">
        <?php
        include('../includes/colg.php');
        ?>
        </div>
        
        <div id="contenu">
			
        </div>
        
        <?php
        include('../includes/bas.php');
        mysql_close();
        ?>