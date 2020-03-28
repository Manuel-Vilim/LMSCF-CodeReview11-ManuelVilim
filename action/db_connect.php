<?php #
	$hostName = "localhost";
	$userName = "root"; 
	$password = "";
	$dbName = "cr11_manuel_petadoption";

	$conn = mysqli_connect($hostName, $userName, $password, $dbName);

	if(!$conn){
		echo "error";
	}
	/*if(! isset($_SESSION['admin'])){
			header('Location: index.php')
		}*/
 ?>