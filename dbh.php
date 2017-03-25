<?php
// Database Handler

$conn = mysqli_connect('localhost', 'root', '', 'logintest'); // conexion hecha

// error Handler

if(!$conn){ // si no se produce la conexion, pon el error.
  die("Connection failed: ".mysqli_connect_error());  // esto solo para probar
  // NO USAR CUANDO SUBAS TU SITIO ONLINE.  
}

 ?>
