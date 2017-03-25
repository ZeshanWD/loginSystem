<?php
session_start();
session_destroy();  // cerramos la sesion.
header("Location: index.php");
