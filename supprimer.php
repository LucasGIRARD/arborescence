<?php
include("log.php");
include("SQL.php");
$mysql = openSQLConnexion();
$tab_id_suppr = $_POST["suppr"];

$SQL_del_tout = "DELETE FROM basesuppr WHERE utilisateur=?";
insertUpdate($mysql, $SQL_del_tout,array(array($_SESSION['utilisateur'])));
if (isset($tab_id_suppr)) {
	foreach ($tab_id_suppr as $id_suppr) {

		$SQL_ajout = "select id from ajout WHERE id=?";
		$tab_ajout = select($mysql, $SQL_ajout, array($id_suppr));

		if(!empty($tab_ajout)) {
			$SQL_del = "DELETE FROM ajout WHERE id=?";
			insertUpdate($mysql, $SQL_del,array(array($id_suppr)));
		} else {
			$SQL_insert_suppr = "INSERT INTO basesuppr (utilisateur,id_supprime) VALUES(?,?)";
			insertUpdate($mysql, $SQL_insert_suppr, array(array($_SESSION['utilisateur'],$id_suppr)));
		}

		$SQL_sous_dossier_ajout = "select id from ajout WHERE emplacement=?";
		$tab_sous_dossier_ajout = select($mysql, $SQL_sous_dossier_ajout, array($id_suppr));

		foreach ($tab_sous_dossier_ajout as $sous_dossier_ajout) {
			$SQL_del = "DELETE FROM ajout WHERE id=?";
			insertUpdate($mysql, $SQL_del,array(array($sous_dossier_ajout)));
		}

		$SQL_sous_dossier_base = "select id from base WHERE emplacement=?";
		$tab_sous_dossier_base = select($mysql, $SQL_sous_dossier_base, array($id_suppr));

		foreach ($tab_sous_dossier_base as $sous_dossier_base) {
			$SQL_insert_suppr_sous = "INSERT INTO basesuppr (utilisateur,id_supprime) VALUES(?,?)";
			insertUpdate($mysql, $SQL_insert_suppr_sous, array(array($_SESSION['utilisateur'],$sous_dossier_base)));
		}
	}
}
echo "<meta http-equiv='Refresh' content='2;URL=arbo.php'>";
?>
<br />
<center>suppression en cours veuillez patientez</center>