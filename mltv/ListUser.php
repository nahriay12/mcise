<?php include('User.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Liste des utilisateurs</title>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="input-group">
				<a class="edit_bnt" href="AjoutUser.php">Ajouter</a>
		</div>
	<form method="post" action="">
		<div class="input-group">
			<table>
		<thead>
			<tr>
				<th>User Name</th>
				<th>Password</th>
				<th>First Name</th>
				<th>Second Name</th>
				<th>Adress</th>
				<th>Téléphone</th>
				<th>CIN</th>
				<th>Type</th>
				
				<th colspan="2"> Action </th>
			</tr>
		</thead>
		<tbody>
			<?php while($row=mysqli_fetch_array($results)){?>
				<tr>
					<td><?php echo $row['User_Name'];?></td>
					<td><?php echo $row['Password'];?></td>
					<td><?php echo $row['First_Name'];?></td>
					<td><?php echo $row['second_Name'];?></td>
					<td><?php echo $row['Adress'];?></td>
					<td><?php echo $row['Tel'];?></td>
					<td><?php echo $row['CIN'];?></td>
					<td><?php echo $row['Type'];?></td>
					
					
					<td>
						<a class="edit_bnt" href="ModifUser.php?edit=<?php echo $row['id_User']; ?>">Modifier</a>
					</td>
					<td>
						<a class="del_bnt" href="User.php?del=<?php echo $row['id_User']; ?>" onclick="if(window.confirm('Voulez-vous vraiment supprimer ?')){return true;}else{return false;}">Suprimer</a>
					</td>
				</tr>
			<?php }?>
		</tbody>
	</table>
		</div>
	</form>
</body>
</html>