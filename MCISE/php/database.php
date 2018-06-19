<?php

class Database
{
	#les attributes de la base de donnée
	private $instanse;
	private $db;
	private $hostname="localhost";
	private $dbname='cise_bd';
	private $user='root';
	private $password='';
	private $options=array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	);

	public function connexion()
	{
		try
		{
			if($this->instanse===null)
			{
				$this->db=new PDO('mysql:host='.$this->hostname.';dbname='.$this->dbname,$this->user,$this->password,$this->options);
				$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			}
			return $this->db;
		}catch(PDOException $e)
		{
			// die( "Erreur !: " . $e->getMessage());
			die( "Erreur !: Impossible de se connecter à la base de donnée");
		}
	}
}
