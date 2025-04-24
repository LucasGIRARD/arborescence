<?php
include("log.php");
include("sql.php");



$SQL_del = "DELETE FROM basesuppr WHERE utilisateur='".$_SESSION['utilisateur']."'";
insert($SQL_del);

$SQL_ajout = "select id from ajout WHERE utilisateur='".$_SESSION['utilisateur']."'";
$tab_ajout = sql($SQL_ajout);

if (isset($_POST["suppr"])) {
    $suppr = $_POST["suppr"];
    foreach ($suppr as $id_suppr) {
	if (empty($tab_ajout))
	{
	 $SQL_insert_suppr = "INSERT INTO basesuppr VALUES('','".$_SESSION['utilisateur']."','".$id_suppr."')";
            insert($SQL_insert_suppr);
	}
	else
	{
        foreach ($tab_ajout[0] as $id_ajout)
        {
           if ($id_suppr == $id_ajout) {
            $SQL_del = "DELETE FROM ajout WHERE id='".$id_suppr."'";
            insert($SQL_del);
        }
        else {
            $SQL_insert_suppr = "INSERT INTO basesuppr VALUES('','".$_SESSION['utilisateur']."','".$id_suppr."')";
            insert($SQL_insert_suppr);
        }
        }
		}

    }
}

echo "<meta http-equiv='Refresh' content='2;URL=arbo.php'>";
?>
<br />
<center>suppression en cours veuillez patientez</center>
