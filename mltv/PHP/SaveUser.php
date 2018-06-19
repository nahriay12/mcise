<?php 
     
     require_once '../connexion/connection.php';

    if (isset($_POST['User_Name'])) $User_Name=$_POST['User_Name'];
    if (isset($_POST['Password'])) $Password=$_POST['Password'];
    if (isset($_POST['First_Name'])) $First_Name=$_POST['First_Name'];
    if (isset($_POST['second_Name'])) $second_Name=$_POST['second_Name'];
    if (isset($_POST['Adress'])) $Adress=$_POST['Adress'];
    if (isset($_POST['Tel'])) $Tel=$_POST['Tel'];
    if (isset($_POST['CIN'])) $CIN=$_POST['CIN'];
    if (isset($_POST['Type'])) $Type=$_POST['Type'];

if($User_Name!="" && $Password!="" && $First_Name!="" && $second_Name!="" && $Adress!="" && $Tel!="" && $CIN!="" && $Type!=""){

	$tabInsert = array('',$User_Name,$Password,$First_Name,$second_Name,$Adress,$Tel,$CIN,$Type);
	$insertUser->execute($tabInsert);
	//echo "ajout bien";
}
     header('Location:AjoutUser.php');
 ?>