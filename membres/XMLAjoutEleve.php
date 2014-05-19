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
				
		
		
				If(isset($_POST['valide']))
				{
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
				}
				$query = "SELECT * FROM see_eleve.eleves";
 
				$dbresult = mysql_query($query);
				 
				// create a new XML document
				 
				$doc = new DomDocument('1.0' , 'ISO-8859-1');
				 
				// create root node
				 
				$root = $doc->createElement('ELEVES');
				 
				$root = $doc->appendChild($root);
				 
				 
				while($row = mysql_fetch_assoc($dbresult)) {   //--> Une ligne à la fois
				 
				 
				 
				  $occ = $doc->createElement("ELEVE");       //--> Un noed a chaque ligne
				 
				  $occ = $root->appendChild($occ);
				 
				 
				 
				  foreach ($row as $fieldname => $fieldvalue) {   //--> Ajout d'un noeud fils pour chaque champ
				 
				 
				 
					$child = $doc->createElement($fieldname);    //--> Nom du child et sa valeur a ajouter
				 
					$child = $occ->appendChild($child);
				 
					$value = $doc->createTextNode($fieldvalue);
				 
					$value = $child->appendChild($value);
				 
				  }
				 
				 
				 
				}
				$doc->formatOutput = TRUE;
				
				$doc->save('testEcrit.xml');
				
				
				
		?>
		
        </div>
        
        <?php
        include('../includes/bas.php');
        mysql_close();
        ?>
