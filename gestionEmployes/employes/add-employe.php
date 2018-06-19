<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter employé</title>
</head>
<body>
	<?php 
		require_once '../config/connection.php';

		$selectDepartements->execute();

		$fetchAllDept = $selectDepartements->fetchAll(PDO::FETCH_OBJ);
	?>
	<form action="saveEmploye.php" method="post">
		Nom :<input type="text" name="nom"><br/>
		Préom :<input type="text" name="prenom"><br/>
		Age :<input type="text" name="age"><br/>
		Département : 
		<select name="departement">			
			<option value="">Choisit votre département</option>
			<?php foreach ($fetchAllDept as $dept): ?>
			<option value="<?=$dept->idDept?>"><?=$dept->name?></option>
			<?php endforeach; ?>
		</select><br/>
		<input type="submit" value="Envoyer">
	</form>
</body>
</html>