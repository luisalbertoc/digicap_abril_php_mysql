<?php
include "includes/conn.php";
$id = $_GET['id'];

$conn = conexion();
$sql = " delete from contacto where id = ".$id."  ";
if($conn->query($sql))
{
  header("Location:listado_contacto.php");
}else {
  echo "Error";
}

?>
