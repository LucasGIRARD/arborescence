<?php
include("log.php");
if ( isset($_SESSION['utilisateur']) || !empty($_SESSION['utilisateur']) )
{
    echo "<meta http-equiv='Refresh' content='2;URL=arbo.php'>";
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title></title>
    </head>
    <body>
  <form method="post" action="index.php">
            <p style="text-align:center;">
             <select name="utilisateur">
            <option value="muriel">Muriel</option>
            <option value="damien">Damien</option>
            <option value="nouara">Nouara</option>
            <option value="yamina">Yamina</option>
            <option value="marie">Marie</option>
            <option value="christelle">Christelle</option>
            <option value="gael">Gael</option>
            <option value="genievre">Genievre</option>
            <option value="rodolphe">Rodolphe</option>
        </select>

                <input type="submit" value="Envoyer" title="valider pour aller &agrave; la page s&eacute;lectionn&eacute;e" />

</p>
</form>

    </body>
</html>
