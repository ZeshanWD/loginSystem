<?php
session_start();
include 'dbh.php';

$first = $_POST['firstName'];
$last = $_POST['lastName'];
$username = $_POST['username'];
$password = $_POST['password'];

// los nombre son los que estan en la base de datos.
$sql = "insert into user(firstName, lastName, username, password) values(
  '$first', '$last', '$username', '$password'
  )";

$result = mysqli_query($conn, $sql);

header('Location: index.php');
