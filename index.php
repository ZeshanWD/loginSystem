<?php
// Esto lo vamos a meter en todas las paginas para tener la sesion creada.
session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!-- ************************LOGIN FORM ********************************-->
    <form action="login.php" method="post">
      <input type="text" name="username" placeholder="Username"><br>
      <input type="password" name="password" placeholder="password"><br>
      <button type="submit">Log in!</button>
    </form>
    <?php
    if(isset($_SESSION['id'])){
      echo $_SESSION['id'];
    } else {
        echo "You are not logged in";
    }

     ?>
    <br>
    <br>
    <!-- ************************SIGN UP FORM ********************************-->
    <form action="signup.php" method="POST">
      <input type="text" name="firstName" placeholder="FirstName"><br>
      <input type="text" name="lastName" placeholder="LastName"><br>
      <input type="text" name="username" placeholder="Username"><br>
      <input type="password" name="password" placeholder="password"><br>
      <button type="submit">Sign up!</button>
    </form>
    <br><br><br>
    <form action="logout.php">
      <button>Log out!</button>
    </form>
  </body>
</html>
