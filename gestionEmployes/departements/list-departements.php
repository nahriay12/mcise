<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.css">
<head>
	<title>departements</title>
</head>
<body>
    <?php 
		require_once '../config/connection.php';

		$selectDepartements->execute();

		$fetchAllDept = $selectDepartements->fetchAll(PDO::FETCH_OBJ);
	?>
	<a href="add-departement.php" class="btn btn-primary">Ajouter departement</a>
	<table class="table table-hover">
			<thead>
				<tr>
					<th>id</th>
					<th>name</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($fetchAllDept as $Dept): ?>
				<tr>
					<td><?=$Dept->idDept;?></td>
					<td><?=$Dept->name;?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
</body>
</html>