<?php

function sql($sql) {

  // Param&egrave;tres de connexion
  $serveur="sql.free.fr";
  $utilisateur="net0ne";
  $passe="gmdev123";
  $base="net0ne";

  // Ouverture de la connexion
  $link=mysql_connect($serveur, $utilisateur, $passe)
	  or exit("Impossible d'ouvrir la connexion avec le serveur MySQL");

  // Choix de la base
  mysql_select_db($base, $link)
	  or exit("Impossible d'ouvrir la connexion avec la base ".$base);

  // Ex&eacute;cution de la requête
  $resultat=mysql_query($sql,$link);

  // R&eacute;cup&eacute;ration des lignes de r&eacute;sultat dans un tableau
	$tab=array();
 if ($resultat != false){
  while($ligne=mysql_fetch_array($resultat)) {
    $tab[]=$ligne;
  }
 
  // Lib&eacute;ration du r&eacute;sultat de la requête
  mysql_free_result($resultat);
 }
  // Fermeture de la connexion
  mysql_close($link);

	// Retourne le tableau
	return $tab;
}


function insert($sql) {

  // Param&egrave;tres de connexion
  $serveur="sql.free.fr";
  $utilisateur="net0ne";
  $passe="gmdev123";
  $base="net0ne";
  
  // Ouverture de la connexion
  $link=mysql_connect($serveur, $utilisateur, $passe)
	  or exit("Impossible d'ouvrir la connexion avec le serveur MySQL");

  // Choix de la base
  mysql_select_db($base, $link)
	  or exit("Impossible d'ouvrir la connexion avec la base ".$base);

  // Ex&eacute;cution de la requête
  mysql_query($sql,$link);

}



?>