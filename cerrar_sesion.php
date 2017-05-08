<?php
session_start();
session_destroy();
header("Location:listado_contacto.php");
?>
