<?php 
	
	require_once('Fonctions.php');
	$fonction=new Fonctions();
	$secteur=$fonction->Show('secteur');

	if(isset($_POST['save'])){
		$nom=filter_var (trim($_POST['nom']),FILTER_SANITIZE_STRING);
		$filter=filter_var (trim($_POST['filter']),FILTER_SANITIZE_STRING);
		$params=array($nom,$filter);
		$result=$fonction->Insert("INSERT INTO `secteur`(`Nom`, `filter`) VALUES(?,?)",$params);
		header('location: /MCISE/Secteur.php');
	}
	if(isset($_POST['update'])){
		$nom=filter_var (trim($_POST['nom']),FILTER_SANITIZE_STRING);
		$filter=filter_var (trim($_POST['filter']),FILTER_SANITIZE_STRING);
		$set=" Nom='$nom',filter='$filter'";
		$fonction->Update("secteur",$set,$_POST['id'],'Id_S');
		$modif=false;
		header('location: /MCISE/Secteur.php');
	}
	if(isset($_GET['del'])){
		$delete=$fonction->DeleteById('secteur',$_GET['del'],'Id_S');
		header('location: /MCISE/Secteur.php');
	}
	if(isset($_POST['cancel'])){
		$modif=false;
		header('location: /MCISE/Secteur.php');
	}
	
?>