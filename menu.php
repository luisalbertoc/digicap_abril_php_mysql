<?php
if(isset($_SESSION['nombre']))
{
    echo $_SESSION['nombre'];
}
?>
<div class="list-group">
  <a class="list-group-item" href="formulario.php">Ingresar contacto</a>
  <a class="list-group-item" href="listado_contacto.php">Listar contacto</a>
  <a class="list-group-item" href="logear.php">Iniciar sesión</a>
  <a class="list-group-item" href="cerrar_sesion.php">Cerrar sesión</a>
</div>
