<!DOCTYPE html>
<html>
<head>
	<title>employes</title>
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.css">
</head>
<body>
	<?php 
		require_once '../config/connection.php';

		$selectEmployes->execute();

		$fetchAllEmp = $selectEmployes->fetchAll(PDO::FETCH_OBJ);
	?>
	<div class="container">
		<a href="add-employe.php" class="btn btn-primary">Ajouter employé</a>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Nom</th>
					<th>Prénom</th>
					<th>Age</th>
					<th colspan="2">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($fetchAllEmp as $emp): ?>
				<tr>
					<td><?php echo $emp->nom;?></td>
					<td><?=$emp->prenom;?></td>
					<td><?php echo $emp->age;?></td>
					<td><a href="delete-employe.php?id=<?=$emp->idEmp;?>">Supprimer Employé</a> </td>
					<td><a href="edit-employe.php?id=<?=$emp->idEmp;?>">Editer Employé</a> </td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</body>
</html>