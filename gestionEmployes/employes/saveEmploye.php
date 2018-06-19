<?php
	require_once '../config/connection.php';

	if(isset($_POST['nom'])) $nom=$_POST['nom'];
	if(isset($_POST['prenom'])) $prenom=$_POST['prenom'];
	if(isset($_POST['age'])) $age=$_POST['age'];
	if(isset($_POST['departement'])) $departementId=$_POST['departement'];

	$tabInsert = array('',$nom,$prenom,$age,$departementId);

	$insertEmployes->execute($tabInsert);

	header('Location:list-employes.php');
?>