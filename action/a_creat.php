<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../creat.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title></title>
	<title></title>
</head>
<body>

</body>
</html>

<?php 
	require_once 'db_connect.php';

	/*if(! isset($_SESSION['admin'])){
			header('Location: index.php')
		}*/

	if($_POST){
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

		$sql = "INSERT INTO `animals`(`breed`, `name`, `age`, `type`, `image`, `zip_code`, `city`, `address`, `availability`, `description`, `hobby`) VALUES ('$breed', '$name', '$age', '$type', '$image', '$zip_code', '$city','$address','$availability','$description','$hobby')";

		if(mysqli_query($conn,$sql)){
			echo "
			<div id='card'>
			<div class='row justify-content-center mt-5'><h2>You added a new animal!</h2><br></div>
			<div class='row justify-content-center mt-1'>
			<a href='../homepage.php' class='btn btn-primary'>Back to Hompage</a>
			</div>
			</div>";
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