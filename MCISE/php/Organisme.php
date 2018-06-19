<?php
require_once('Fonctions.php');
$fonction=new Fonctions();
$tab_sec="";
$Organismes=$fonction->Show('organisme');
if(isset($_GET['del'])){
	$delete=$fonction->DeleteById('organisme',$_GET['del'],'id_O');
	header('location: ../Organisme.php');
}
$Secteurs_afiiche=$fonction->Show('secteur');

if(isset($_POST['save'])){
	$Sec_Orga=$_POST['Sec'];
	foreach($Sec_Orga as $val){
		$tab_sec=$tab_sec."@".$val;
	}
	
	$nom=filter_var (trim($_POST['nom']),FILTER_SANITIZE_STRING);
	$description=filter_var (trim($_POST['desc']),FILTER_SANITIZE_STRING);
	$email=filter_var (trim($_POST['email']),FILTER_SANITIZE_EMAIL);
	$tel=filter_var (trim($_POST['phone']),FILTER_SANITIZE_STRING);
	$adresse=filter_var (trim($_POST['adresse']),FILTER_SANITIZE_STRING);
	$site=filter_var (trim($_POST['site']),FILTER_SANITIZE_URL);
	
	if(isset($_FILES['img'])){
	  $errors= array();
	  $file_name = $_FILES['img']['name'];
	  $file_size =$_FILES['img']['size'];
	  $file_tmp =$_FILES['img']['tmp_name'];
	  $file_type=$_FILES['img']['type'];
	  $file_ext=strtolower(end(explode('.',$_FILES['img']['name'])));
	  
	  $expensions= array("jpeg","jpg","png");
	  
	  if(in_array($file_ext,$expensions)){
		 if($file_size < 1090000){
				move_uploaded_file($file_tmp,"images/portfolio/".$file_name);
				echo "Success";
			}
			else{
				$errors[]='File size must be excately 1 MB';
			}
	  }
	  else{
		  $errors[]="extension not allowed, please choose a JPEG or PNG file.";
	  }
	}
	$params=array($nom,$description,$email,$tel,$adresse,$site,$file_name,$tab_sec);
	$lastID=$fonction->Insert("INSERT INTO `organisme`(`Nom`, `Description`, `Email`, `Tel`, `Adresse`, `Site_Web`, `Image`,`Sec_Org`) VALUES(?,?,?,?,?,?,?,?)",$params);
	foreach($Sec_Orga as $one)
	{
		$fonction->Insert("INSERT INTO `org_secteur` VALUES(?,?)",array($one,$lastID));
	}
	header('location: Organisme.php');
}
if(isset($_POST['update'])){
	$Sec_Orga=$_POST['Sec'];
	foreach($Sec_Orga as $val){
		$tab_sec=$tab_sec."@".$val;
	}
	$nom=filter_var (trim($_POST['nom']),FILTER_SANITIZE_STRING);
	$description=filter_var (trim($_POST['desc']),FILTER_SANITIZE_STRING);
	$email=filter_var (trim($_POST['email']),FILTER_SANITIZE_EMAIL);
	$tel=filter_var (trim($_POST['phone']),FILTER_SANITIZE_STRING);
	$adresse=filter_var (trim($_POST['adresse']),FILTER_SANITIZE_STRING);
	$site=filter_var (trim($_POST['site']),FILTER_SANITIZE_URL);
	
	if(isset($_FILES['img'])){
	  $errors= array();
	  $file_name = $_FILES['img']['name'];
	  $file_size =$_FILES['img']['size'];
	  $file_tmp =$_FILES['img']['tmp_name'];
	  $file_type=$_FILES['img']['type'];
	  $file_ext=strtolower(end(explode('.',$file_name)));
	  $expensions= array("jpeg","jpg","png");
	  
	  if(in_array($file_ext,$expensions)){
		 if($file_size < 1090000){
				move_uploaded_file($file_tmp,"images/portfolio/".$file_name);
				$set=" Nom='$nom',Description='$description',Email='$email' ,Tel='$tel' ,Adresse='$adresse', Site_Web='$site', Image='$file_name' ,Sec_Org='$tab_sec'";
				$fonction->Update("organisme",$set,$_POST['id'],'id_O');
				$fonction->DeleteById("org_secteur",$_POST['id'],'Id_O');
				foreach($Sec_Orga as $one)
				{
					$fonction->Insert("INSERT INTO `org_secteur` VALUES(?,?)",array($one,$_POST['id']));
				}
				header('location: Organisme.php');
			}
			else{
				$errors[]='File size must be excately 1 MB';
			}
	  }
	  else{
		  $errors[]="extension not allowed, please choose a JPEG or PNG file.";
	  }
	}
		if(isset($_POST['cancel'])){
		header('location: Organisme.php');
	}


}
?>