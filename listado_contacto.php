<?php
session_start();
if(isset($_SESSION['activo']))
{
include "includes/conn.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formularios en PHP</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style media="screen">
      .btn-pink{
        background-color: rgb(87, 9, 167);
      }
    </style>
  </head>
  <body>
<!--
    <div class="row">
      <div class="col-md-6">
        div 1
      </div>
      <div class="col-md-6">
        div 2
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        div 1
      </div>
      <div class="col-md-3">
        div 2
      </div>
      <div class="col-md-3">
        div 3
      </div>
      <div class="col-md-3">
        div 4
      </div>
    </div>
  -->

    <div class="container-fluid">

      <div class="row">
          <nav class="navbar navbar-default">
            <div class="navbar-header">
              <div class="navbar-brand">
                ABRIL
              </div>
            </div>
          </nav>
      </div>

      <div class="row">

        <div class="col-md-3">
          <?php
          include "menu.php";
          ?>
        </div>

        <div class="col-md-9">

          <h4>LISTADO DE CONTACTOS</h4>

          <table class="table table-striped table-hover">
            <tr>
              <th>
                Id
              </th>
              <th>
                Nombre
              </th>
              <th>
                Apellido
              </th>
              <th>
                Sexo
              </th>
              <th>
                Acción
              </th>
            </tr>


          <?php
          if( isset($_GET['mensaje']) )
          {
            echo $_GET['mensaje']."<br><br>";
          }
          ?>

          <?php
          //Abrir conexion
          $conn = conexion();
          $sql = " SELECT * FROM `contacto`  ";

          if($contactos = $conn->query($sql) )
          {

            //print_r($contactos);
            while($contacto = $contactos->fetch_array())
            {
              //print_r($contacto);
              ?>
              <tr>
                <td>
                  <?php echo $contacto["id"] ?>
                </td>
                <td>
                  <?php echo $contacto["nombre"] ?>
                </td>
                <td>
                  <?= $contacto["apellido"] ?>
                </td>
                <td>
                  <?= $contacto["sexo"] ?>
                </td>
                <td>

                  <a href="edicion_contacto.php?id=<?= $contacto["id"] ?>" class="btn btn-primary btn-xs" >
                    Editar
                  </a>

                  <a href="eliminar_contacto.php?id=<?= $contacto["id"] ?>" class="btn btn-danger btn-xs" >
                    Eliminar
                  </a>


                </td>
              </tr>
              <?php
              //echo $contacto["nombre"]." ".$contacto["apellido"];
              //echo "<br><br>";
            }



          }else {
            echo "Error en la consulta sql : ".$conn->error;
          }

          ?>

          </table>



        </div>

      </div>


    </div>





  </body>
</html>
<?php
}
?>
