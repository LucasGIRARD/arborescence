<?php
include("SQL.php");
$mysql = openSQLConnexion();
$SQL_base = "SELECT * FROM base Where emplacement=0";
$fonction_sql = select($mysql, $SQL_base);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <title></title>
</head>
<body style="text-align:center;margin-left:100px;">
  <br />
  <h1 style="text-align:left;">Listing</h1>
  <br />
  <table border="1px" style="text-align:center;empty-cells:show;">
    <th>niveau 1</th>
    <th>niveau 2</th>
    <th>niveau 3</th>
    <th>commentaire</th>

    <?php

    foreach ($fonction_sql as $ligne)
    {

     $SQL_suppr = "SELECT * FROM basesuppr WHERE id_supprime=?";
     $fonction_sql_suppr = select($mysql, $SQL_suppr, array($ligne['id']));


     if (!empty($fonction_sql_suppr)){
       echo "<tr style='color:red;'><td><del>".$ligne['nom']."</del></td><td></td><td></td><td>".$ligne['comm']."</td></tr>";
     }
     else
     {
       echo "<tr><td>".$ligne['nom']."</td><td></td><td></td><td>".$ligne['comm']."</td></tr>";
     }
     $SQL_base2 = "SELECT * FROM baseajout Where emplacement=?";
     $fonction_sql2 = select($mysql, $SQL_base2, array($ligne['id']));
     foreach ($fonction_sql2 as $ligne2)
     {

       $SQL_suppr = "SELECT * FROM basesuppr WHERE id_supprime=?";
       $fonction_sql_suppr = select($mysql, $SQL_suppr, array($ligne2['id']));

       if (!empty($fonction_sql_suppr)){
        echo "<tr style='color:red;'><td></td><td><del>".$ligne2['nom']."</del></td><td></td><td>".$ligne2['comm']."</td></tr>";

      }
      else{

       echo "<tr><td></td><td>".$ligne2['nom']."</td><td></td><td>".$ligne2['comm']."</td></tr>";
     }

     $SQL_base3 = "SELECT * FROM baseajout Where emplacement=?";
     $fonction_sql3 = select($mysql, $SQL_base3, array($ligne2['id']));
     foreach ($fonction_sql3 as $ligne3)
     {
       $SQL_suppr = "SELECT * FROM basesuppr WHERE id_supprime=?";
       $fonction_sql_suppr = select($mysql, $SQL_suppr, array($ligne3['id']));
       if (!empty($fonction_sql_suppr)){
        echo "<tr style='color:red;'><td></td><td></td><td><del>".$ligne3['nom']."</del></td><td>".$ligne3['comm']."</td></tr>";

      }
      else{
       echo "<tr><td></td><td></td><td>".$ligne3['nom']."</td><td>".$ligne3['comm']."</td></tr>";

     }
   }
 }
}


?>
</table>

</body>
</html>