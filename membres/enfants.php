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
		//echo $idP;
		if(isset($_POST['validate']))
		{
			$IDN = $_POST['Id_National'];
			$NOM = $_POST['Nom'];
			$SEX = $_POST['Sexe'];
			$PRENOM = $_POST['Prenom'];
			$Doub = $_POST['Doublement'];
			$SMS = $_POST['SMS'];
			$Trans = $_POST['Transport'];
			$insertion = "INSERT INTO eleves (ID_Eleve,ID_NATIONAL,NOM,PRENOM,CODE_SEXE) VALUES ('', '".mysql_real_escape_string($IDN)."','".mysql_real_escape_string($NOM)."','".mysql_real_escape_string($PRENOM)."','".mysql_real_escape_string($SEX)."')";			
			if(mysql_query($insertion))
			{
				$insertion2 = "SELECT MAX(ID_Eleve) FROM eleves";
				$insertion3 = mysql_query($insertion2);
				$idmax1= mysql_result($insertion3,0,"MAX(ID_Eleve)"); 
				//echo $idmax1;
				//echo $idP;
				$insertion4 = "INSERT INTO parents_eleves (ID_Eleve,ID_Parent) VALUES (".$idmax1.",".$idP.")";
				if(mysql_query($insertion4))
				{				}
				else{die('Requête invalide : ' . mysql_error());}
			}
			else{
				//die('Requête invalide : ' . mysql_error());
				$insertion6 = "SELECT NOM,CODE_SEXE,ID_eleve FROM eleves WHERE ID_NATIONAL = '".$IDN."'";
				$insertion7 = mysql_query($insertion6);
				//echo $insertion6;
				while($ele = mysql_fetch_assoc($insertion7))
				{
					//echo 'test';
					if($ele['NOM'] == $NOM && $ele['CODE_SEXE'] == $SEX )
					{
						$insertion4 = "INSERT INTO parents_eleves (ID_Eleve,ID_Parent) VALUES (".$ele['ID_eleve'].",".$idP.")";
						if(mysql_query($insertion4))
						{				}
						else{die('Requête invalide : ' . mysql_error());
						}
					}
					else {echo "Vous n'êtes pas un parent de l'enfant";}
					//echo 
				}
				//echo 'test fin';
				//else {die('Requête invalide : ' . mysql_error());}
			}
		}		
		?>
		
        <div id="contenu">

		<?php 
		$idParent = mysql_query("SELECT ID_Parent,id_pseudo FROM connection WHERE id_pseudo =".$_SESSION['id_pseudo']);
		while($reponse = mysql_fetch_assoc($idParent))
		{$idP = $reponse['ID_Parent']; }
		$request = mysql_query("SELECT e.ID_Eleve, ID_NATIONAL, NOM FROM eleves e JOIN parents_eleves pe ON(pe.ID_Eleve = e.ID_Eleve) WHERE pe.ID_Parent =".$idP);
		while($row = mysql_fetch_assoc($request)) 
		{
			echo "<div><a href='enfantProfil.php?id=".$row['ID_Eleve']."'>".$row['ID_NATIONAL']."<br/>".$row['NOM']." </a></div><br/>";
		}
		
		?>
        </div>
        
        <?php
        include('../includes/bas.php');
        mysql_close();
        ?>