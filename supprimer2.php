<?php
include("log.php");
include("SQL.php");
$mysql = openSQLConnexion();

$SQL_del = "DELETE FROM basesuppr WHERE utilisateur=?";
insertUpdate($mysql, $SQL_del,array(array($_SESSION['utilisateur'])));

$SQL_ajout = "select id from ajout WHERE utilisateur=?";
$tab_ajout = select($mysql, $SQL_ajout, array($_SESSION['utilisateur']));

if (isset($_POST["suppr"])) {
    $suppr = $_POST["suppr"];
    foreach ($suppr as $id_suppr) {
        if (empty($tab_ajout)) {
            $SQL_insert_suppr = "INSERT INTO basesuppr VALUES('',?,?)";
            insertUpdate($mysql, $SQL_insert_suppr, array(array($_SESSION['utilisateur'],$id_suppr)));
        } else {
            foreach ($tab_ajout[0] as $id_ajout) {
                if ($id_suppr == $id_ajout) {
                    $SQL_del = "DELETE FROM ajout WHERE id=?";
                    insertUpdate($mysql, $SQL_del,array(array($id_suppr)));
                } else {
                    $SQL_insert_suppr = "INSERT INTO basesuppr VALUES('',?,?)";
                    insertUpdate($mysql, $SQL_insert_suppr, array(array($_SESSION['utilisateur'],$id_suppr)));
                }
            }
        }
    }
}
echo "<meta http-equiv='Refresh' content='2;URL=arbo.php'>";
?>
<br />
<center>suppression en cours veuillez patientez</center>
