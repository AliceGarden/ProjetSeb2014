<?php
/*
Neoterranos & LkY
Page colg.php

La colonne de gauche de votre site.

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
<div id="menu_gauche"> <br>
<?php
if(isset($_SESSION['id_pseudo']))
			{
			?>
				<a href="<?php echo ROOTPATH; ?>/membres/enfants.php">Enfants</a> <br>
				<a href="<?php echo ROOTPATH; ?>/membres/AjoutEnfant.php">Ajout</a>
			<?php
			}
else
{
	echo 'erreur !';
}
			
?>
</div>