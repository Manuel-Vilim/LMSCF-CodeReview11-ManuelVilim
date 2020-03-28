<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="creatc.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<div id="card">
	<div class="row justify-content-center mt-5 ">
		<h2 class="pb-4 text-info">ADD A NEW ANIMAL</h2>
		<form action="action/a_creat.php" method="post">
			<div class= "form-group">
			<input class="size" type="text" placeholder="Breed" name="breed"><br>
			</div>
			<div class= "form-group">
			<input class="size"type="text" placeholder="Name" name="name"><br>
			</div>
			<div class= "form-group">
			<input class="size"type="text" placeholder="Age" name="age"><br>
			</div>
			<div class= "form-group">
			<input class="size"type="text" placeholder="Type" name="type"><br>
			</div>
			<div class= "form-group">
			<input class="size" type="text" placeholder="Image-URL" name="image"><br>
			</div>
			<div class= "form-group">
			<input class="size"type="text" placeholder="Zip_Code" name="zip_code"><br>
			</div>
			<div class= "form-group">
			<input class="size"type="Text" placeholder="City" name="city"><br>
			</div>
			<div class= "form-group">
			<input class="size"type="text" placeholder="Address" name="address"><br>
			</div>
			<div class= "form-group">
			<input class="size"type="date" placeholder="Availability" name="availability"><br>
			</div>
			<div class= "form-group">
			<input class="size"type="text" placeholder="Description" name="description"><br>
			</div>
			<div class= "form-group">
			<input class="size"type="text" placeholder="Hobby" name="hobby"><br>
			</div>
			<input id="size" type="submit" class="btn btn-primary" name="submit">
		</form>
	</div>
	</div>
	/*if(! isset($_SESSION['admin'])){
			header('Location: index.php')
		}*/
</body>
</html>