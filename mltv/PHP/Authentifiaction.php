<?php
$host = "localhost"; // Nom du serveur
$username = "root";;// Nom de l'utilisateur de la base
$password = ""; // Mot de passe pour accèder à la base
$db_name = "mltv"; // Nom de la base

$connection = mysql_connect($host,$username,$password,$db_name) // On se connecte au serveur
or die (mysql_error().' sur la ligne '.__LINE__);

mysql_select_db($DB_base, $connection) // On se connecte à la BDD
or die (mysql_error().' sur la ligne '.__LINE__);
    
	
	
?>
