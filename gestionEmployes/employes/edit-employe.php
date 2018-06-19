<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter employé</title>
</head>
<body>
	<?php 
		require_once '../config/connection.php';

		if(isset($_GET['id'])) $id = $_GET['id'];
		
		$findEmployes->bindParam(':id',$id);
		$findEmployes->execute();
		$fetchEmploye = $findEmployes->fetchObject();
		
		$selectDepartements->execute();
		$fetchAllDept = $selectDepartements->fetchAll(PDO::FETCH_OBJ);
	?>
	<form action="updateEmploye.php" method="post">
		<input type="hidden" name="idEmp" value="<?=$fetchEmploye->idEmp?>">
		Nom :<input type="text" name="nom" value="<?=$fetchEmploye->nom?>"><br/>
		Préom :<input type="text" name="prenom" value="<?=$fetchEmploye->prenom?>"><br/>
		Age :<input type="text" name="age" value="<?=$fetchEmploye->age?>"><br/>
		Département : 
		<select name="departement">			
			<option value="">Choisit votre département</option>
			<?php foreach ($fetchAllDept as $dept): ?>
			<option value="<?=$dept->idDept?>" <?php if($fetchEmploye->idDept == $dept->idDept) echo 'selected'; ?> ><?=$dept->name?></option>
			<?php endforeach; ?>
		</select><br/>
		<input type="submit" value="Envoyer">
	</form>
</body>
</html>