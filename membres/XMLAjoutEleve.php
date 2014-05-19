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

		<?php

				// On récupère le contenu du fichier XML source
				$xml_source=file_get_contents("C:\\wamp\\www\\projet_seb\\XML\\test.xml");

				// On retire les balises vides
				$motif="`<&#91;a-zA-Z0-9_&#93;*/>`i";
				$xml_source_clean=preg_replace($motif, "", $xml_source);

				// On met le code XML nettoyé des balises vides dans un fichier temporaire
				file_put_contents("c:\\wamp\\bin\\mysql\\mysql5.6.12\\data\\see_eleve\\temp.xml", $xml_source_clean);

				// On importe tout ça dans la BDD
				mysql_query("LOAD XML INFILE 'temp.xml' INTO TABLE see_eleve.eleves ROWS identified by '<ELEVE>'") or die("Erreur MySQL : ".mysql_error());

				// On supprime le fichier temporair
				unlink("c:\\wamp\\bin\\mysql\\mysql5.6.12\\data\\see_eleve\\temp.xml");
		?>
		
        </div>
        
        <?php
        include('../includes/bas.php');
        mysql_close();
        ?>
