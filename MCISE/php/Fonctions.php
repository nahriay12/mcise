<?php
require_once('database.php');
class Fonctions extends Database
{
	public function Insert($requete,$params)
	{
		$db=$this->connexion();
		$query=$db->prepare($requete);
		$query->execute($params);
		return $db->lastInsertId(); 
	}
	
	public function DeleteById($table,$id,$id1)
	{
		$db=$this->connexion();
		$query=$db->prepare("DELETE FROM $table WHERE $id1=?");
		$query->execute(array($id));
		$count=$query->rowCount();
		return $count;
	}
	
	public function Update($table,$set,$id2,$id1)
	{
		$db=$this->connexion();
		$query=$db->prepare("UPDATE $table SET $set WHERE $id1=?");
		$query->execute(array($id2));
		$count=$query->rowCount();
		return $count;
		// var_dump($query);
	}
	
	public function Show($table,$id=null,$id2=null)
	{
		$db=$this->connexion();
		if($id!=null)
		{
			$query=$db->prepare("SELECT * FROM $table WHERE $id2=?");
			$query->execute(array($id));
			$rusltat=$query->fetch(PDO::FETCH_OBJ);
			return $rusltat;
		}else{
			$query=$db->prepare("SELECT * FROM $table");
			$query->execute();
			$rusltat=$query->fetchAll(PDO::FETCH_OBJ);
			return $rusltat;
		}	
	}
	public function show_parametre($id){
		$db=$this->connexion();
		$query=$db->prepare("SELECT os.id_O,s.Nom FROM secteur s,org_secteur os WHERE s.id_s= os.id_s and id_O=$id");
		$query->execute();
		$rusltat=$query->fetchAll(PDO::FETCH_OBJ);
		return $rusltat;
	}
}