<?php
include("log.php");
include("SQL.php");
$mysql = openSQLConnexion();

if ( !isset($_SESSION['utilisateur']) || empty($_SESSION['utilisateur'])) {
  echo "<meta http-equiv='Refresh' content='2;URL=index.php'>";
  exit("probleme log");
}

$SQL_base = "SELECT * FROM base Where emplacement=0";
$fonction_sql = select($mysql, $SQL_base);

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <title></title>
</head>

<body>
  <div style="max-width: 1100px;margin: auto;">
    <h1 style="text-align:left;">Ajout de dossier</h1>
    <br />
    <form method="post" action="ajout.php">
      nombre de dossier &agrave; ajouter :
      <input type="text" name="nombre_ajout" value="1" size="2" />
      <input type="submit" value="Envoyer" title="valider pour aller &agrave; la page d'ajout" />
    </form>
    <hr />
    <h1 style="text-align:left;">Listing - Supprimer</h1>
    <br />
    <form method="post" action="supprimer.php">
      <table border="1px" style="text-align:center;empty-cells:show;">
        <th>supprimer</th>
        <th>niveau 1</th>
        <th>niveau 2</th>
        <th>niveau 3</th>
        <th>commentaire</th>
        <?php
        foreach ($fonction_sql as $ligne) {

          $SQL_suppr = "SELECT * FROM basesuppr WHERE utilisateur=? && id_supprime=?";
          $fonction_sql_suppr1 = select($mysql, $SQL_suppr, array($_SESSION['utilisateur'],$ligne['id']));

          if (!empty($fonction_sql_suppr1)) {
            echo "<tr style='color:red;'><td><input type='checkbox' name='suppr[]' value='".$ligne['id']."' checked /></td><td><del>".$ligne['nom']."</del></td><td></td><td></td><td>".$ligne['comm']."</td></tr>";
          } else {
            echo "<tr><td><input type='checkbox' name='suppr[]' value='".$ligne['id']."' /></td><td>".$ligne['nom']."</td><td></td><td></td><td>".$ligne['comm']."</td></tr>";
          }
          $SQL_base2 = "SELECT * FROM baseajout Where emplacement=? && (utilisateur='base' || utilisateur=?)";
          $fonction_sql2 = select($mysql, $SQL_base2, array($ligne['id'],$_SESSION['utilisateur']));
          foreach ($fonction_sql2 as $ligne2) {

            $SQL_suppr = "SELECT * FROM basesuppr WHERE utilisateur=? && id_supprime=?";
            $fonction_sql_suppr2 = select($mysql, $SQL_suppr, array($_SESSION['utilisateur'],$ligne2['id']));

            if (!empty($fonction_sql_suppr1) || !empty($fonction_sql_suppr2)) {
              echo "<tr style='color:red;'><td><input type='checkbox' name='suppr[]' value='".$ligne2['id']."' checked /></td><td></td><td><del>".$ligne2['nom']."</del></td><td></td><td>".$ligne2['comm']."</td></tr>";
            } else {
              echo "<tr><td><input type='checkbox' name='suppr[]' value='".$ligne2['id']."' /></td><td></td><td>".$ligne2['nom']."</td><td></td><td>".$ligne2['comm']."</td></tr>";
            }

            $SQL_base3 = "SELECT * FROM baseajout Where emplacement=? && (utilisateur='base' || utilisateur=?)";
            $fonction_sql3 = select($mysql, $SQL_base3, array($ligne2['id'], $_SESSION['utilisateur']));
            foreach ($fonction_sql3 as $ligne3) {
              $SQL_suppr = "SELECT * FROM basesuppr WHERE utilisateur=? && id_supprime=?";
              $fonction_sql_suppr3 = select($mysql, $SQL_suppr, array($_SESSION['utilisateur'], $ligne3['id']));
              if (!empty($fonction_sql_suppr1) || !empty($fonction_sql_suppr2) || !empty($fonction_sql_suppr3)){
                echo "<tr style='color:red;'><td><input type='checkbox' name='suppr[]' value='".$ligne3['id']."' checked /></td><td></td><td></td><td><del>".$ligne3['nom']."</del></td><td>".$ligne3['comm']."</td></tr>";
              } else{
                echo "<tr><td><input type='checkbox' name='suppr[]' value='".$ligne3['id']."' /></td><td></td><td></td><td>".$ligne3['nom']."</td><td>".$ligne3['comm']."</td></tr>";
              }
            }
          }
        }
        ?>
      </table>
      <input type="submit" value="Envoyer" title="valider pour aller à la page s&eacute;lectionn&eacute;e" />
    </form>
  </div>
</body>
</html>