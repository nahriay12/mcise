<?php 

	define('HOST', 'localhost'); //variable constante
	define('DATABASE', 'actualtes');
	define('USER', 'root');
	define('PASSWORD', '');
   $options=array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);

	$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD, $options);

     $selectArticle = $pdo->prepare('select Titre, contenu, image, Date_Publier, 
     	                              categorie.nom AS ArticleNom, user.Nom AS UserNom, user.prenom
				                      from article, categorie, user 
				     	              WHERE article.Id_Cat = categorie.Id_Cat
				                      AND article.Id_User = user.Id_User
				                      AND categorie.Id_Cat= :id');	

    $selectCategorie = $pdo->prepare('select Id_Cat,Nom from categorie');
    $selectCat = $pdo->prepare('select Id_Cat,Nom from categorie where Id_Cat= :id');
 ?>
