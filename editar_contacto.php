<?php
include "includes/conn.php";
$id = $_GET['id'];
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

        $sql = " update contacto set nombre = '".$nombre."' , apellido = '".$apellido."' where id= ".$id." ";


        if($conn->query($sql))
        {
          header("Location:edicion_contacto.php?id=".$id."&mensaje=Dato editado correctamente, de id = ".$id);
        }else {
          header("Location:edicion_contacto.php?id=".$id."&mensaje=Error en editar los datos");
        }
      }

    }else{
      header("Location:edicion_contacto.php?id=".$id."&mensaje=No existen datos en nombre o apellido ");
    }

  }else{
    header("Location:edicion_contacto.php?id=".$id."&mensaje=No existen datos en nombre o apellido ");
  }

}else{
  header("Location:edicion_contacto.php?id=".$id."&mensaje=Error del servidor ");
}


?>
