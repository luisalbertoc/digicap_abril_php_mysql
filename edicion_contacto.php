<?php
session_start();
include "includes/conn.php";

if(isset($_GET['id']))
{
  $id = $_GET['id'];

  $conn = conexion();
  $sql = " select * from contacto where id = ".$id." limit 1 ";

  if($contacto = $conn->query($sql)){

    $contacto = $contacto->fetch_array();
    //print_r($contacto);

  }else {
    echo "error".$conn->error;
  }


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

          <div class="col-md-6">

            <h4>FORMULARIOS</h4>

            <?php
            if( isset($_GET['mensaje']) )
            {
              echo $_GET['mensaje']."<br><br>";
            }
            ?>

            <form action="editar_contacto.php?id=<?= $id ?>" method="post" >
              <table class="table table-bordered table-hover table-condensed" >
                <tr>
                  <td>
                    Nombre
                  </td>
                  <td>
                    <input value="<?= $contacto['nombre'] ?>" class="form-control" type="text" maxlength="10" name="nombre" placeholder="nombre..."  />
                  </td>
                </tr>
                <tr>
                  <td>
                    Apellido
                  </td>
                  <td>
                    <input value="<?= $contacto['apellido'] ?>" class="form-control" type="text" maxlength="10" name="apellido" placeholder="apellido..."  />
                  </td>
                </tr>

                <tr>
                  <td colspan="2">
                    <input  class="btn btn-success" type="submit" value="Editar usuario" />
                  </td>
                </tr>
              </table>
            </form>

          </div>

        </div>


      </div>





    </body>
  </html>

  <?php
}else{
  echo "Error";
}

?>
