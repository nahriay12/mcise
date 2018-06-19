<?php
	
	require '../config/connection.php';

	if(isset($_GET['id'])) $id=$_GET['id'];

	$deleteEmployes->bindParam(':id',$id);
	$deleteEmployes->execute();

	header('Location:list-employes.php');
?>