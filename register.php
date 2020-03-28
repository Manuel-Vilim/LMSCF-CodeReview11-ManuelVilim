<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Registration</title>
  </head>
  <body>
    <?php
    if(isset($_POST["submit"])){
      require("mysql.php");
      $stmt = $mysql->prepare("SELECT * FROM login WHERE USERNAME = :user"); //Username überprüfen
      $stmt->bindParam(":user", $_POST["username"]);
      $stmt->execute();
      $count = $stmt->rowCount();
      if($count == 0){
        //Username ist frei
        $stmt = $mysql->prepare("SELECT * FROM login WHERE EMAIL = :email"); //Username überprüfen
        $stmt->bindParam(":email", $_POST["email"]);
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count == 0){
          if($_POST["pw"] == $_POST["pw2"]){
            //User anlegen
            $stmt = $mysql->prepare("INSERT INTO login (USERNAME, PASSWORD, EMAIL, TOKEN) VALUES (:user, :pw, :email, null)");
            $stmt->bindParam(":user", $_POST["username"]);
            $hash = password_hash($_POST["pw"], PASSWORD_BCRYPT);
            $stmt->bindParam(":pw", $hash);
            $stmt->bindParam(":email", $_POST["email"]);
            $stmt->execute();
            echo "Your registration was successfull";
          } else {
            echo "The passwords don´t match ";
          }
        } else {
          echo "This EMail address is not available";
        }
      } else {
        echo "This username is not available";
      }
    }
     ?>

     <div class="container d-flex justify-content-center">
     
    
        
      <div id="bground">
    <h1 class="d-flex justify-content-center pb-3 text-info">Registration</h1>
   
    <form class="d-flex justify-content-center" action="register.php" method="post"> 
      <div>
      <input id="test"type="text" name="username" placeholder="Username" required><br><br>
      <input id="test"type="text" name="email" placeholder="Email" required><br><br>
      <input id="test"type="password" name="pw" placeholder="Passwort" required><br><br>
      <input id="test"type="password" name="pw2" placeholder="Confirm Passwort" required><br><br>
      <button class="btn btn-primary" type="text" name="submit">Creat</button>
      </div>
    </form>
    <br>
    <a href="index.php">Are you already registrated?</a>
  </div>
</div>
  </body>
</html>