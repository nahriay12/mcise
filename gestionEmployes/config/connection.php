<?php
	
	define('HOST', 'localhost'); //variable constante
	define('DATABASE', 'gestionemployes');
	define('USER', 'root');
	define('PASSWORD', '');

	$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD);

	$selectEmployes = $pdo->prepare('select * from employes');
	$insertEmployes = $pdo->prepare('insert into employes values(?,?,?,?,?)');
	$deleteEmployes = $pdo->prepare('delete from employes where idEmp = :id');	
	$findEmployes = $pdo->prepare('select * from employes where idEmp = :id');
	$updateEmploye = $pdo->prepare('update employes set nom = ?, prenom = ?, age = ?, idDept = ? where idEmp = ?');

	$selectDepartements = $pdo->prepare('select * from departements');
	$insertDepartements = $pdo->prepare('insert into departements values(?,?)');
?>