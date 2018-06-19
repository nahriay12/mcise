<?php 
include '..\connexion\connection.php';

	$nom=$_POST["nom"];
	$prenom=$_POST["prenom"];
	$age=$_POST["age"];

		if($nom != ""  && $prenom != "" && $age != "")
		{
			$sql="INSERT INTO personne VALUES('','$nom','$prenom','$age')";
			$cnx->exec($sql);
		}	
		header('Location:..\index.php');
?>