<?php
session_start();
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

          <form action="ingresar_contacto.php" method="post" >
            <table class="table table-bordered table-hover table-condensed" >
              <tr>
                <td>
                  Nombre
                </td>
                <td>
                  <input class="form-control" type="text" maxlength="10" name="nombre" placeholder="nombre..."  />
                </td>
              </tr>
              <tr>
                <td>
                  Apellido
                </td>
                <td>
                  <input class="form-control" type="text" maxlength="10" name="apellido" placeholder="apellido..."  />
                </td>
              </tr>
              <tr>
                <td>
                  Sexo
                </td>
                <td>
                  Femenino : <input  type="radio" name="sexo" value="f"  />
                  <br>
                  Masculino : <input type="radio" name="sexo" value="m" />
                </td>
              </tr>
              <tr>
                  <td>
                    Ocupación
                  </td>
                  <td>

                      <select class="form-control" name="ocupacion">
                        <option value="sin ocupacion"> Sin Ocupación </option>
                        <option value="dueño(a) de casa"> Dueño(a) de casa </option>
                        <option value="trabador"> Trabajador </option>
                        <option value="estudiante"> Estudiante </option>
                      </select>

                  </td>
              </tr>
              <tr>
                <td>
                  Interéses
                </td>
                <td>
                  programación : <input type="checkbox" name="programacion" />
                  <br>
                  musica : <input type="checkbox" name="musica" />
                  <br>
                  baile : <input type="checkbox" name="baile" />
                </td>
              </tr>
              <tr>
                <td>
                  comentario
                </td>
                <td>
                  <textarea class="form-control" name="comentario" maxlength="50"></textarea>
                </td>
              </tr>
              <tr>
                <td>
                    Fecha de nacimiento
                </td>
                <td>
                  <input class="form-control" type="date" name="fecha_cumpleanos" />
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <input  class="btn btn-pink" type="submit" value="Registrar usuario" />
                </td>
              </tr>
            </table>
          </form>

        </div>

      </div>


    </div>





  </body>
</html>
