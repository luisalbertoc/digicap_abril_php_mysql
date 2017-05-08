<?php
include "includes/conn.php";

//Variables por GET
//echo $_GET['nombre'];
//echo "<br>";
//echo $_GET['apellido'];
//echo "<br>";
//echo $_GET['sexo'];
//echo "<br>";
//echo $_GET['ocupacion'];
//echo "<br>";

//if( isset($_GET['programacion']) )
//{
//  echo $_GET['programacion'];
//}

//Variables por POST
function validar_sql($variable)
{
  $variable = str_replace("'","",$variable);
  $variable = str_replace("delete","",$variable);
  $variable = str_replace("insert","",$variable);
  $variable = str_replace("update","",$variable);
  return $variable;
}

//Primera validación (si existen variables por post)
if($_POST)
{
  //Segunda validación
  if( isset($_POST['nombre']) &&  isset($_POST['apellido']) )
  {
    //Tercera validación
    if( $_POST['nombre'] != "" &&  $_POST['apellido'] != "")
    {

      $nombre = validar_sql($_POST['nombre']);
      $apellido = validar_sql($_POST['apellido']);

      //Listo para ingresar a la base de datos
      // host, usuario, clave
      $conn = conexion();

      if($conn == true)
      {

        $sql = " INSERT INTO `contacto` (`id`, `nombre`, `apellido`, `sexo`, `ocupacion`,
           `comentario`, `fecha_nacimiento`)
            VALUES (NULL, '".$nombre."', '".$apellido."', NULL, NULL, NULL, NULL); ";


        if($conn->query($sql))
        {
          $id = $conn->insert_id;
          header("Location:formulario.php?mensaje=Dato ingresado correctamente, de id = ".$id);
        }else {
          header("Location:formulario.php?mensaje=Error en insertar los datos");
        }
      }




    }else{
      header("Location:formulario.php?mensaje=No existen datos en nombre o apellido ");
    }

  }else{
    header("Location:formulario.php?mensaje=No existen datos en nombre o apellido ");
  }

}else{
  header("Location:formulario.php?mensaje=Error del servidor ");
}


?>
