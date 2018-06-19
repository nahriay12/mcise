<!DOCTYPE html>
<html lang="fr">
<head>
	<title>test</title>
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\bootstrap.css">
</head>
<body>
    <?php 
     require_once 'connexion\connection.php';

        $selectpersonne->execute();
        $fetchAllpers=$selectpersonne->fetchAll(PDO::FETCH_OBJ);
     ?>
    <div class="well">
    <h1>les informations</h1>
	<form action="personne/ajouter_personne.php" method="Post">
	 <table style="width:300px">
	 <tr>
	 	<td><label for="">nom</label></td>
	 	<td><input type="text" name="nom"></td>
	 </tr>
	 <tr>
	 	<td><label for="">prenom</label></td>
	 	<td><input type="text" name="prenom"></td>
	 </tr>
	 <tr>
	 	<td><label for="">age</label></td>
	 	<td><input type="text" for="age" name="age"></td>
	 </tr>
	 <tr>
	 	<td><input type="submit"></td>
	 	<td><input type="reset"></td>
	 </tr>
	 </table>
	</form>
	</div>
	<table id="info" class="table table-hover" style="position: relative;top:90px;">
			<tr>
			    <th>id</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Age</th>
			</tr>
	    	<?php foreach ($fetchAllpers as $value): ?>
	    	<tr>
	    	    <td><?php echo $value->id; ?></td>
	    		<td><?php echo $value->nom;?></td>
	    		<td><?php echo $value->prenom;?></td>
	    		<td><?php echo $value->age; ?></td>
	    		<td><a class="btn btn-primary" 
	    		href="personne\supprimer_personne.php?id=<?php echo $value->id; ?>">supprimer</a></td>
	    		<td><a href="">Editer</a></td>
	    	</tr>
	        <?php endforeach ; ?>
	</table>
  
</body>
</html>