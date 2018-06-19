<?php include('User.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>User</title>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="post" action="">
		<div class="input-group">
			<table>
			<tr>
				<td><label>User_Name </label></td>
				<td><input type="text" name="User_Name" ></td>
			</tr>
			<tr>
				<td><label>Password </label></td>
				<td><input type="Password" name="Password" ></td>
			</tr>
			<tr>
				<td><label>First_Name </label></td>
				<td><input type="text" name="First_Name" ></td>
			</tr>
			<tr>
				<td><label>Second_Name </label></td>
				<td><input type="text" name="second_Name" ></td>
			</tr>
			<tr>
				<td><label>Adress mail</label></td>
				<td><input type="email" name="Adress" ></td>
			</tr>
			<tr>
				<td><label>Téléphone</label></td>
				<td><input type="tel" name="Tel" ></td>
			</tr>
			<tr>
				<td><label>CIN</label></td>
				<td><input type="text" name="CIN" ></td>
			</tr>
			<tr>
				<td><label>Type d'utilisateur</label></td>
				<td><input type="text" name="Type" ></td>
			</tr>

			
			<tr>
				<div class="input-group">
						<button type="submit" name="save" class="btn" onclick="if(window.confirm('Voulez-vous vraiment l'ajouter ?')){return true;}else{return false;}">Ajouter</button>	
			</tr>
			</table>
		</div>
	</form>
</body>
</html>