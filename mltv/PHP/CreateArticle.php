<?php include('Article.php');
	
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];
		
		$rec = mysqli_query($db,'select * from article where id='.$id);
		$record = mysqli_fetch_array($rec);
		$id=$record['id'];
		$titre=$record['titre'];
		$image=$record['image'];
		$video=$record['video'];
		$type_cat=$record['type_cat'];
		$modif = true;
		
	}
		
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Article</title>
	<meta charset="ANSI">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="post" action="">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		
		<div class="input-group">
			<?php if ($modif == false): ?>
				<a class="edit_bnt" href="AjoutArticle.php?edit=<?php echo $row['id']; ?>">Ajouter</a>
			<?php else: ?>
				<button type="submit" name="update" class="btn" onclick="if(window.confirm('Voulez-vous vraiment modifier ?')){return true;}else{return false;}">Modifier</button>
				<button type="submit" name="cancel" class="btn">Annuler</button>
			<?php endif ?>
		</div>
		
	</form>
	<table>
		<thead>
			<tr>
				<th>Num Secteur d'activité</th>
				<th>titre Secteur d'activité</th>
				<th>image Secteur d'activité</th>
				<th>video Secteur d'activité</th>
				<th>type Secteur d'activité</th>
				
				<th colspan="2"> Action </th>
			</tr>
		</thead>
		<tbody>
			<?php while($row=mysqli_fetch_array($results)){?>
				<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['titre'];?></td>
					<td><?php echo $row['image'];?></td>
					<td><?php echo $row['video'];?></td>
					<td><?php echo $row['type_cat'];?></td>
					
					<td>
						<a class="edit_bnt" href="ModifArticle.php?edit=<?php echo $row['id']; ?>">Modifier</a>
					</td>
					<td>
						<a class="del_bnt" href="Article.php?del=<?php echo $row['id']; ?>" onclick="if(window.confirm('Voulez-vous vraiment supprimer ?')){return true;}else{return false;}">Suprimer</a>
					</td>
				</tr>
			<?php }?>
		</tbody>
	</table>
</body>
</html>
