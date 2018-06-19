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
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="post" action="">
		<div class="input-group">
			<table>
			<tr>
				<td><label>Titre de L'article </label></td>
				<td><input type="text" name="titre" value="<?php if(isset($_GET['edit'])){ echo $titre; } ?>"></td>
			</tr>
			<tr>
				<td><label>Image </label></td>
				<td><input type="file" name="image" value="<?php if(isset($_GET['edit'])){ echo $image; } ?>"></td>
			</tr>
			<tr>
				<td><label>video </label></td>
				<td><input type="text" name="video" value="<?php if(isset($_GET['edit'])){ echo $video; } ?>"></td>
			</tr>
			<tr>
				<td><label>type de la categorie </label></td>
				<td><input type="text" name="type_cat" value="<?php if(isset($_GET['edit'])){ echo $type_cat; } ?>"></td>
			</tr>

			
			<tr>
				<div class="input-group">
						<button type="submit" name="update" class="btn" onclick="if(window.confirm('Voulez-vous vraiment modifier ?')){return true;}else{return false;}">Modifier</button>
						<button type="submit" name="cancel" class="btn">Annuler</button>
				</div>
				
			</tr>
			</table>
		</div>
	</form>
</body>
</html>