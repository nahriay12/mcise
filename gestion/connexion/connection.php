<?php 
	$serveur_name= "localhost";
	$user_name="root";
	$password="";
		try{
			$cnx = new PDO("mysql:host=$serveur_name;dbname=personnes",$user_name,$password);
			    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		   //  echo "Connected successfully"; 
		    }
		catch(PDOException $e)
		    {
		    echo "Connection failed: " . $e->getMessage();
		    }

		    $selectpersonne=$cnx->prepare('select id,nom,prenom,age from personne');
		    $deletepersonne=$cnx->prepare('delete from personne where id = :id');
 ?>