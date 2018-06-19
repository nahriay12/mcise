<?php 

	$id=0;
	$User_Name="";
	$Password="";
	$First_Name="";
	$second_Name="";
	$Adress="";
	$Tel="";
	$CIN="";
	$Type="";
	$host = "localhost";
	$db_name = "mltv";
	$username = "root";
	$password = "";
	$modif = false;
	 
	$db = mysqli_connect($host,$username,$password,$db_name);

	if(isset($_POST['save'])){
		$User_Name=$_POST['User_Name'];
		$Password=$_POST['Password'];
		$First_Name=$_POST['First_Name'];
		$second_Name=$_POST['second_Name'];
		$Adress=$_POST['Adress'];
		$Tel=$_POST['Tel'];
		$CIN=$_POST['CIN'];
		$Type=$_POST['Type'];
		if($User_Name){
			$query=$db->prepare("INSERT INTO `users`(`User_Name`, `Password`, `First_Name`, `second_Name`, `Adress`, `Tel`, `CIN`, `Type`) VALUES ('".$User_Name."','".$Password."','".$First_Name."','".$second_Name."','".$Adress."','".$Tel."','".$CIN."','".$Type."')");
			echo $query1;
			$query->execute();
			//mysqli_query($db,$query);
			header('location: ListUser.php');
		}
	}
	if(isset($_POST['update'])){
		$id=$_GET['edit'];
		$Name=$_POST['User_Name'];
		$Pass=$_POST['Password'];
		$First_N=$_POST['First_Name'];
		$second_N=$_POST['second_Name'];
		$Adress=$_POST['Adress'];
		$Tel=$_POST['Tel'];
		$CIN=$_POST['CIN'];
		$Type=$_POST['Type'];
		//jhbjbhjbkhb
		//echo "update users set User_Name='".$Name."',Password='".$Pass."',First_Name='".$First_N."',second_Name='".$second_N."',Adress='".$Adress."',Tel='".$Tel."',CIN='".$CIN."',Type='".$Type."' where id_User=".$id ;
		mysqli_query($db,"update users set User_Name='".$Name."',Password='".$Pass."',First_Name='".$First_N."',second_Name='".$second_N."',Adress='".$Adress."',Tel='".$Tel."',CIN='".$CIN."',Type='".$Type."' where id_User=".$id);
		header('location: ListUser.php');
	}
	if(isset($_GET['del'])){
		$id = $_GET['del'];
		mysqli_query($db,"delete from users where id_User=".$id);
		header('location: ListUser.php');
	}
	if(isset($_POST['cancel'])){
		$modif = false;
		header('location: ListUser.php');
	}
	
	$results=mysqli_query($db,"select * from users");
?>