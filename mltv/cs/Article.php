<?php 
	
	$id=0;
	$titre="";
	$image="";
	$video="";
	$type_cat="";
	$host = "localhost";
	$db_name = "mltv";
	$username = "root";
	$password = "";
	$modif = false;
	 
	$db = mysqli_connect($host,$username,$password,$db_name);

	if(isset($_POST['save'])){
		$titre=$_POST['titre'];
		$image=$_POST['image'];
		$video=$_POST['video'];
		$type_cat=$_POST['type_cat'];
		if($titre){
			$query="INSERT INTO `article`(`titre`, `image`, `video`, `type_cat`) VALUES ('".$titre."','".$image."','".$video."','".$type_cat."')";
			mysqli_query($db,$query);
			header('location: CreateArticle.php');
		}else{
		}
	}
	if(isset($_POST['update'])){
		$id=$_GET['edit'];
		$titre =$_POST['titre'];
		$image =$_POST['image'];
		$video =$_POST['video'];
		$type_cat =$_POST['type_cat'];
		mysqli_query($db,"UPDATE `article` SET `titre`='".$titre."',`image`='".$image."',`video`='".$video."',`type_cat`='".$type_cat."' WHERE id=" .$id);
		header('location: CreateArticle.php');
		
	}
	if(isset($_GET['del'])){
		$id = $_GET['del'];
		mysqli_query($db,"delete from article where id=".$id);
		header('location: CreateArticle.php');
	}
	if(isset($_POST['cancel'])){
		$modif = false;
		header('location: CreateArticle.php');
	}
	
	$results=mysqli_query($db,"select * from article");
?>