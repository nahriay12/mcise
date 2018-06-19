<?php 

require '..\connexion\connection.php';

 	 $id=$_GET[('id')];
 	 
 	 
     
     if ($id != "") {
     	# code...
	 $deletepersonne->bindParam(':id',$id);
	 $deletepersonne->execute();
      }
 header('Location:..\index.php');