<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../creat.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title></title>
</head>
<body>

</body>
</html>

<?php 
	require_once'db_connect.php';

	/*if(! isset($_SESSION['admin'])){
			header('Location: index.php')
		}*/

	if(isset($_POST)){

		$breed= $_POST["breed"];
		$name= $_POST["name"];
		$age= $_POST["age"];
		$type= $_POST["type"];
		$image= $_POST["image"];
		$zip_code= $_POST["zip_code"];
		$city= $_POST["city"];
		$address= $_POST["address"];
		$availability= $_POST["availability"];
		$description= $_POST["description"];
		$hobby= $_POST["hobby"];

		$id=$_POST["id"];

		$sql= "UPDATE `animals` SET `breed`='$breed',`name`='$name',`age`='$age',`type`='$type',`image`='$image',`zip_code`='$zip_code',`city`='$city', `address`='$address', `availability`='$availability',`description`='$description', `hobby`='$hobby' WHERE id=$id";


		if(mysqli_query($conn,$sql)){
			echo "
			<div id='card'>
			<div class='row justify-content-center mt-5'><h2>You updated the Animallist!</h2><br></div>
			<div class='row justify-content-center mt-1'>
			<a href='../homepage.php' class='btn btn-primary'>Back to Hompage</a>
			</div>
			</div>";;
		}else{
			echo "
			<div id='card'>
			<div class='row justify-content-center mt-5'><h2>Error! Please try it again!</h2><br></div>
			<div class='row justify-content-center mt-1'>
			<a href='../homepage.php' class='btn btn-primary'>Back to Hompage</a>
			</div>
			</div>";

		}
	}
 ?>