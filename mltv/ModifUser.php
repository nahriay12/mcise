<?php include('User.php');
	
    if(isset($_GET['edit'])){
		$id=$_GET['edit'];
		
		$rec = mysqli_query($db,'select * from users where id_User='.$id);
		$record = mysqli_fetch_array($rec);
		$User_Name=$record['User_Name'];
		$Password=$record['Password'];
		$First_Name=$record['First_Name'];
		$second_Name=$record['second_Name'];
		$Adress=$record['Adress'];
		$Tel=$record['Tel'];
		$CIN=$record['CIN'];
		$Type=$record['Type'];
		$modif = true;
		
	}	
	
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
				<td><input type="text" name="User_Name" value="<?php echo $User_Name;  ?>"></td>
			</tr>
			<tr>
				<td><label>Password </label></td>
				<td><input type="Password" name="Password" value="<?php echo $Password;  ?>"></td>
			</tr>
			<tr>
				<td><label>First_Name </label></td>
				<td><input type="text" name="First_Name" value="<?php echo $First_Name;  ?>"></td>
			</tr>
			<tr>
				<td><label>Second_Name </label></td>
				<td><input type="text" name="second_Name" value="<?php echo $second_Name;  ?>"></td>
			</tr>
			<tr>
				<td><label>Adress mail</label></td>
				<td><input type="email" name="Adress" value="<?php echo $Adress;  ?>"></td>
			</tr>
			<tr>
				<td><label>Téléphone</label></td>
				<td><input type="tel" name="Tel" value="<?php echo $Tel;  ?>"></td>
			</tr>
			<tr>
				<td><label>CIN</label></td>
				<td><input type="text" name="CIN" value="<?php  echo $CIN;  ?>"></td>
			</tr>
			<tr>
				<td><label>Type d'utilisateur</label></td>
				<td><input type="text" name="Type"  value="<?php  echo $Type;  ?>"></td>
			</tr>

			
			<tr>
				<div class="input-group">
						<button type="submit" name="update" class="btn" onclick="if(window.confirm('Voulez-vous vraiment modifier ?')){return true;}else{return false;}">Modifier</button>	
			</tr>
			</table>
		</div>
	</form>
</body>
</html>