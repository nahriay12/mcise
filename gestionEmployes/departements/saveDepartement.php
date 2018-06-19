<?php
	require_once '../config/connection.php';

	if(isset($_POST['name'])) $nom=$_POST['name'];

	$tabDept = array('',$nom);
 
 	$insertDepartements->execute($tabDept);

    header('location:list-departements.php');
 	?>