<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <?php
    if(isset($_POST["submit"])){
      require("mysql.php");
      $stmt = $mysql->prepare("SELECT * FROM login WHERE USERNAME = :user"); //Username überprüfen
      $stmt->bindParam(":user", $_POST["username"]);
      $stmt->execute();
      $count = $stmt->rowCount();
      if($count == 1){
        //Username ist frei
        $row = $stmt->fetch();
        if(password_verify($_POST["pw"], $row["PASSWORD"])){
          if($row["status"] == 'admin'){
            $_SESSION["admin"] = $row["USERNAME"];
            header("Location: homepage.php");
          }else{
            session_start();
          $_SESSION["use"] = $row["USERNAME"];
          header("Location: userhomepage.php");
          }
          
        } else {
          echo "Login error, please try again";
        }
      } else {
        echo "Login error";
      }
    }
     ?>
     <div class="container d-flex justify-content-center">
     
    
        
      <div id="bground">
        
    
    <h1 class="d-flex justify-content-center pb-3 text-info">Login</h1>
    <form class="d-flex justify-content-center" action="index.php" method="post">
      <div>
      <input id="test" type="text" name="username" placeholder="Username" required><br><br>
      <input id="test" type="password" name="pw" placeholder="Passwort" required><br><br>
      <button class="btn btn-primary" type="text"  name="submit">Enter</button>
    </div>
    </form>
  
    <br>
    <a href="register.php" class="text-primary">No account yet?</a><br>
    
     </div>
  </div>


  </body>
</html>