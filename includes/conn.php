<?php

//$url_base = "localhost/abril";

function conexion()
{
  //Conectarse a la base de datos
  $conn = new mysqli("localhost","root","campanita","abril");

  //Comprobamos conexión
  if($conn === false)
  {
        die("Error". mysqli_connect_error());

    return false;
  }else {
    return $conn;
  }

}



?>
