<?php 
     
     require_once '../connexion/connection.php';

    if (isset($_POST['titre'])) $titre=$_POST['titre'];
    if (isset($_POST['image'])) $image=$_POST['image'];
    if (isset($_POST['video'])) $video=$_POST['video'];
    if (isset($_POST['cat'])) $cat=$_POST['cat'];

if($titre!="" && $image!="" && $video!="" && $cat!=""){
	$tabInsert = array('',$titre,$image,$video,$cat);

	$insertArticle->execute($tabInsert);
	//echo "ajout bien";
}
     header('Location:AjoutArticle.php');
 ?>