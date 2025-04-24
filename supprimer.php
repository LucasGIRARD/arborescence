<?php
include("log.php");
include("sql.php");

$tab_id_suppr = $_POST["suppr"];

$SQL_del_tout = "DELETE FROM basesuppr WHERE utilisateur='".$_SESSION['utilisateur']."'";
insert($SQL_del_tout);



if (isset($tab_id_suppr)) {
    foreach ($tab_id_suppr as $id_suppr) {
	
	$SQL_ajout = "select id from ajout WHERE id='".$id_suppr."'";
	$tab_ajout = sql($SQL_ajout);
	$ajout = $tab_ajout[0];
	
	if(!empty($ajout))
	{
		$SQL_del = "DELETE FROM ajout WHERE id='".$id_suppr."'";
		insert($SQL_del);
		
		
	
	
	}
	else
	{
	
		$SQL_insert_suppr = "INSERT INTO basesuppr VALUES('','".$_SESSION['utilisateur']."','".$id_suppr."')";
		insert($SQL_insert_suppr);
	
	}
	
	$SQL_sous_dossier_ajout = "select id from ajout WHERE emplacement='".$id_suppr."'";
	$tab_sous_dossier_ajout = sql($SQL_sous_dossier_ajout);
	
	foreach ($tab_sous_dossier_ajout as $sous_dossier_ajout)
	{
		
		$SQL_del = "DELETE FROM ajout WHERE id='".$sous_dossier_ajout."'";
        insert($SQL_del);
		
	}
	
	$SQL_sous_dossier_base = "select id from base WHERE emplacement='".$id_suppr."'";
	$tab_sous_dossier_base = sql($SQL_sous_dossier_base);
	
	foreach ($tab_sous_dossier_base as $sous_dossier_base)
	{
		$SQL_insert_suppr_sous = "INSERT INTO basesuppr VALUES('','".$_SESSION['utilisateur']."','".$sous_dossier_base."')";
		insert($SQL_insert_suppr_sous);
	}
	
    }
}

echo "<meta http-equiv='Refresh' content='2;URL=arbo.php'>";
?>
<br />
<center>suppression en cours veuillez patientez</center>
