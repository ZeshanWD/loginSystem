<?php
session_start();
include 'dbh.php';

$username = $_POST['username'];
$password = $_POST['password'];

// los nombre son los que estan en la base de datos.
$sql = "select * from user where username = '$username' and password = '$password'";
$result = mysqli_query($conn, $sql);

if(!$row = mysqli_fetch_assoc($result)){
  echo "Your username or password is incorrect!";
} else {
  $_SESSION['id'] = $row['id'];
}

header("Location: index.php");
