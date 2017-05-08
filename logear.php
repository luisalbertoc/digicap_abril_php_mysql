<?php
session_start();

$_SESSION['nombre'] = " Luis Alberto ";
$_SESSION['activo'] = true;

header("Location:listado_contacto.php");
?>
