<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="creatc.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title></title>
</head>
<body>

</body>
</html>
<?php 
require_once'action/db_connect.php';

/*if(! isset($_SESSION['admin'])){
			header('Location: index.php')
		}*/
	if(isset($_GET["id"])){
		$id= $_GET["id"];

		$sql = "SELECT * FROM animals WHERE id =$id";
		$result= mysqli_query($conn,$sql);

		$row= $result->fetch_assoc();
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 		<div id="card">
		<div class="row justify-content-center mt-5 ">
		<h2 class="pb-4 text-info">Update the choosen Animal</h2>
 		<form action="action/a_update.php" method="POST">
 			<div class= "form-group">
 		<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
 			</div>
 			<div class= "form-group">
 		<input class="size" type="name" name="breed" value="<?php echo $row['breed'] ?>">
 			</div>
 			<div class= "form-group">
 		<input class="size" type="name" name="name" value="<?php echo $row['name'] ?>">
 			</div>
 			<div class= "form-group">
 		<input class="size"type="name" name="age" value="<?php echo $row['age'] ?>">
 			</div>
 			<div class= "form-group">
 		<input class="size"type="name" name="type" value="<?php echo $row['type'] ?>">
 			</div>
 			<div class= "form-group">
 		<input class="size"type="name" name="image" value="<?php echo $row['image'] ?>">
 			</div>
 			<div class= "form-group">
 		<input class="size"type="name" name="zip_code" value="<?php echo $row['zip_code'] ?>">
 			</div>
 			<div class= "form-group">
 		<input class="size"type="name" name="city" value="<?php echo $row['city'] ?>">
 			</div>
 			<div class= "form-group">
 		<input class="size"type="name" name="address" value="<?php echo $row['address'] ?>">
 			</div>
 			<div class= "form-group">
 		<input class="size"type="date" name="availability" value="<?php echo $row['availability'] ?>">
 			</div>
 			<div class= "form-group">
 		<input class="size"type="name" name="description" value="<?php echo $row['description'] ?>">
 			</div>
 			<div class= "form-group">
 		<input class="size"type="name" name="hobby" value="<?php echo $row['hobby'] ?>">
 			</div>
 		<input id="size" type="submit" class="btn btn-primary" name="submit">
 		
 	</form>
 </div>
</div>
 
 </body>
 </html>