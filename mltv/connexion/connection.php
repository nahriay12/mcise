<?php 
	define('HOST', 'localhost'); //variable constante
	define('DATABASE', 'mltv');
	define('USER', 'root');
	define('PASSWORD', '');

	$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD);

    $insertArticle = $pdo->prepare('insert into article values(?,?,?,?,?)');
    $insertUser = $pdo->prepare('insert into users values(?,?,?,?,?,?,?,?,?)');
    $updateEmploye = $pdo->prepare('update employes set User_Name = ?, Password = ?, First_Name = ?, second_Name = ?, Adress = ?, Tel = ?, CIN = ?,Type = ? where idEmp = ?');
 ?>