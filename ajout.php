<?php
include("log.php");
include("sql.php");

if (isset($_POST["nombre_ajout_traitement"]))
{
   $nombre_ajout_traitement = $_POST["nombre_ajout_traitement"];

   $j=1;
   while ($j < $nombre_ajout_traitement)
   {
  $comm = nl2br($_POST["comm".$j]);
  $dossier = $_POST["dossier".$j];
  $emplacement = $_POST["emplacement".$j];
  if (!empty($dossier))
  {
  $requete_ajout="INSERT INTO ajout VALUES('','".$dossier."','".$emplacement."','".$_SESSION['utilisateur']."', '". $comm ."')";
  insert($requete_ajout);
  echo "entr&eacute;e(s) ajout&eacute;e(s)";
  }
  else
  {
  echo "Nom du dossier nom rempli!";
  }
  echo "<meta http-equiv='Refresh' content='2;URL=arbo.php'>";
 $j=$j+1;
   }
}

if (isset($_POST["nombre_ajout"])) {
    
    $nombre_ajout = $_POST["nombre_ajout"];
    $i=1;
    $nombre_ajout=$nombre_ajout+1;
    $SQL_liste="select * from baseajout WHERE (emplacement='0' || emplacement=1 || emplacement=2) && (utilisateur='base' || utilisateur='".$_SESSION['utilisateur']."') ORDER BY emplacement";
    $fonction_sql_liste = sql($SQL_liste);
    ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title></title>
    </head>
    <body style="text-align:center;margin-left:100px;">
        <br />
<?php
    echo "<form action='ajout.php' method='POST'>";

    while($nombre_ajout != $i){

    echo $i."&nbsp;&nbsp;&nbsp;&nbsp; nom : <input name='dossier".$i."'  type='text' /> &nbsp; emplacement:  <select name='emplacement".$i."'>";

    foreach($fonction_sql_liste as $ligne)
    {
        echo "<option value='".$ligne['id']."'>".$ligne['nom']."</option>";
    }

   echo "</select>";

	echo "&nbsp; commentaire:  <textarea name='comm".$i."'></textarea><br /><br />";
	
    $i=$i+1;
}
echo "<br /><input type='hidden' name='nombre_ajout_traitement' value='".$nombre_ajout."' /><input type='submit' value='Envoyer' title='valider pour aller à la page s&eacute;lectionn&eacute;e' /></form>";

}
?>