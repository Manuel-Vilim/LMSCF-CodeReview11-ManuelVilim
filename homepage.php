<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>CR 11 Manuel</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-dark">
    <a href="#" class="navbar-brand text-info">Petadoption</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="homepage.php" class="text-light nav-item nav-link active">Home</a>
            <a href="old.php" class="text-warning nav-item nav-link">Old but Gold</a>
            <a href="general.php" class="text-success nav-item nav-link">Big & Small</a>
        </div>
        <ul class="nav navbar-nav ml-auto">
        	<li> <a href="index.php" class="text-primary nav-item nav-link"><b>Log out</a></b></li>
        </ul>
    </div>
</nav>
<div class="ml-1 mr-1">
	<div class="bb">
	<div class="d-flex justify-content-center mt-4 mb-4">
	<a href='creat.php'><button type='button' id="headline" class='btn btn-outline-info'><h1>ADD A NEW ANIMAL</h1></button></a><br></div>
	<?php 
		include ("action/db_connect.php");

		/*if(! isset($_SESSION['admin'])){
			header('Location: index.php')
		}*/
		

		$sql = "SELECT * FROM animals";
		$result = mysqli_query($conn, $sql);
		$conn->close();
		if($result->num_rows == 0){
			echo "no result found";
		}elseif($result->num_rows ==1){
			$row = $result->fetch_assoc();?>


			<table class="table">
				<thead>
					<tr>
						
						<th>Breed</th>
						<th>Name</th>
						<th>Age</th>
						<th>Image</th>
						<th>City</th>
						<th>Address</th>
						<th>Availability</th>
						<th colspan="3">Description</th>
						<th>Hobby</th>
						<th>Changes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					</tr>
				</tbody>
			
			<tr>	
			<td><?php echo $row["breed"]; ?></td>
			<td><?php echo $row["name"]; ?></td>
			<td><?php echo $row["age"]; ?></td>
			<td><?php echo $row["image"]; ?></td>
			<td><?php echo $row["city"]; ?></td>
			<td><?php echo $row["address"]; ?></td>
			<td><?php echo $row["availability"]; ?></td>
			<td colspan="3"><?php echo $row["description"]; ?></td>
			<td><?php echo $row["hobby"]; ?></td>
			<td>
			<?php

			echo"<a href='update.php?id=".$row["id"]."'class='btn btn-outline-success'>Update</a><a href='delete.php?id=".$row["id"]."'class='btn btn-outline-danger'>Delete</a><br>";?>
			</tr>
			</table>
			<?php 
		}else{
			$rows = $result->fetch_all(MYSQLI_ASSOC);
			foreach ($rows as $key => $value){?>
			<table class="table table-bordered ">
				<thead>
					<tr class="bg-warning">
						
						<th>Breed</th>
						<th>Name</th>
						<th>Age</th>
						<th>Image</th>
						<th>City</th>
						<th>Address</th>
						<th>Availability</th>
						<th colspan="2">Description</th>
						<th>Hobby</th>
						<th>Changes</th>
					</tr>
				</thead>
				
			
			<tr class="bg-secondary text-light">
			<td><?php echo $value["breed"]; ?></td>
			<td><?php echo $value["name"]; ?></td>
			<td><?php echo $value["age"]; ?></td>
			<td><img src="<?php echo $value['image']; ?>"width="120" height="120"></td>
			<td><?php echo $value["city"]; ?></td>
			<td><?php echo $value["address"]; ?></td>
			<td><?php echo $value["availability"]; ?></td>
			<td colspan="2"><?php echo $value["description"]; ?></td>
			<td><?php echo $value["hobby"]; ?></td>
			<td>
			<?php

			echo"<a href='update.php?id=".$value["id"]."'class='btn btn-outline-success'>Update</a><a href='delete.php?id=".$value["id"]."'class='btn btn-outline-danger'>Delete</a><br>";?>
				
			</td>
			</tr>
			</table>
			<?php
		}
		}
	 ?>
	 </div>
	 </div>
	 <footer class="page-footer font-small blue bg-dark">

  
  <div class="footer-copyright text-center py-3 text-light">© 2020 Copyright:
    <a class="text-danger"> Pedatoption AG</a>
  </div>
  

</footer>
</body>
</html>
<!-- CARD VERSION BELOW
<div class="container">
	

<div class="row">
	<div class="col">
<div class="card" style="width: 18rem;">
  <img src="<?php echo $value['image']; ?>" height="200">
  <div class="card-body">
    <h5 class="card-title"><b>Name: </b><?php echo $value["name"]; ?></h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>Breed: </b><?php echo $value["breed"]; ?></li>
    <li class="list-group-item"><b>Age	: </b><?php echo $value["age"]; ?></li>
    <li class="list-group-item"><b>Address: </b><?php echo $value["address"]; ?></li>
    <li class="list-group-item"><b>Available: </b><?php echo $value["availability"]; ?></li>
    <li class="list-group-item"><b>About: </b><?php echo $value["description"]; ?></li>

  </ul>
  <div class="card-body">
    <?php

			echo"<a href='update.php?id=".$value["id"]."'class='btn btn-outline-success'>Update</a><a href='delete.php?id=".$value["id"]."'class='btn btn-outline-danger'>Delete</a><br>";?>
  </div>
</div>
</div>
</div>
</div>


