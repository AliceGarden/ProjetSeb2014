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
        <?php		 
		$idParent = mysql_query("SELECT ID_Parent,id_pseudo FROM connection WHERE id_pseudo =".$_SESSION['id_pseudo']);
		while($reponse = mysql_fetch_assoc($idParent))
		{$idP = $reponse['ID_Parent']; }
		
		if(isset($_POST['validate']))
		{
			$nom = $_POST['Nom'];
			$prenom = $_POST['Prenom'];
			$insertion = "UPDATE Parents (NOM,PRENOM) VALUES ('".mysql_real_escape_string($nom)."','".mysql_real_escape_string($prenom)."' WHERE Personne_id =".$idP."')";
			if(mysql_query($insertion))
			{				
			}
			else{die('Requête invalide : ' . mysql_error());}
		}		
		$InfoPa = mysql_query("SELECT nom, prenom FROM Parents WHERE Personne_id =".$idP);
		while($reponse = mysql_fetch_assoc($InfoPa))
		{ 
			$nom = $reponse['nom'];
			$prenom = $reponse['prenom'];
		}
		?>
		
        <div id="contenu">
		<br>
		<h1> Informations Personnels </h1>
				<form name="Modification" id="Modification" method="post" action="moncompte.php">
					<fieldset><legend>Modification des Informations Personnels</legend>
						<label for="Nom" class="float">Nom :</label> <input type="text" name="Nom" id="Nom" value="<?php echo $nom; ?>"/><br/>
						<label for="Prenom" class="float">Prenom :</label> <input type="text" name="Prenom" id="Prenom" value="<?php echo $prenom; ?>"/><br/>
						<label for="TEL_PERSONNEL" class="float">Téléphone Personnel</label> <input type="text" name="TEL_PERSONNEL" id="TEL_PERSONNEL" placeholder="Format : 0123456789" /><br/>
						<label for="TEL_PORTABLE" class="float">Téléphone Portable</label> <input type="text" name="TEL_PORTABLE" id="TEL_PORTABLE" placeholder="Format : 0123456789" /><br/>
						<label for="TEL_PROFESSIONNEL" class="float">Téléphone Professionnel</label> <input type="text" name="TEL_PROFESSIONNEL" id="TEL_PROFESSIONNEL" placeholder="Format : 0123456789" /><br/>
						<label for="SMS">Accepte les SMS ?</label> <input type="checkbox" name="SMS" id="SMS"/> <br/>
						<label for="Mel" class="float">Mail :</label> <input type="text" name="Mel" id="Mel"/><br/>										
						<input type="hidden" name="validate" id="validate" value="ok"/>
						<div class="center"><input type="submit" value="Ajout" /></div>
					</fieldset>
				</form>
        </div>
        
        <?php
        include('../includes/bas.php');
        mysql_close();
        ?>