<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      proyecto clase
    </title>
  </head>
  <body>

    <!--  hola -->
    <h4>
      Uso de funciones nativas
    </h4>
    <?php
    //comentario una linea

    /*
    Esto es un comentario largo
    ....
    ....
    ....
    */
    $variable1 = "hola mundo";
    $variable2 = 6;
    $variable3 = 9;

    echo "String : ".$variable1."<br>";
    echo "Cantidad de carácteres (strlen) : ".strlen($variable1)."<br>";

    ?>
    <h4>
      Uso de funciones creadas por uno
    </h4>
    Sumar tres números 5 + 5 + 6 :
    <?php

    sumar_tres_numeros(5,5,6);

    function sumar_tres_numeros($num1,$num2,$num3)
    {
        echo ($num1 + $num2 + $num3)."<br>";
    }

    ?>
    <br>

    <h4>
      Tabla en HTML
    </h4>
    <table border="10">
      <tr> <!-- fila -->
        <th> <!-- columna -->
          columna 1
        </th>
        <th>
          columna 2
        </th>
        <th>
          columna 3
        </th>
      </tr>
      <tr>
        <td>
          columna 4
        </td>
        <td>
          columna 5
        </td>
        <td>
          columna 6
        </td>
      </tr>
    </table>
    <br>

    <h4>Condición IF</h4>

    <?php
    $variable4 = 4;
    echo "La variable tiene un valor de ".$variable4."<br>";
    //Condición IF
    if($variable4 != 4)
    {
      echo "Es verdadero";
    }else {
      echo "Es falso";
    }
    ?>

    <h4>Ciclo While</h4>
    <?php
    $variable5 = 5;
    //While
    while($variable5 < 10)
    {
      echo " Ciclo ejecutado ";
      $variable5 = $variable5 + 1;
    }
    ?>
    <h4> Ciclo do-while </h4>
    <?php
    //Do-While
    $variable6 = 1;
    do{
      echo "Ciclo ejecutado";
    }while($variable6 != 1)
    ?>

    <h4>Ciclo FOR</h4>
    <?php
    $i = 0;
    //For
    for($i = 0; $i <= 10; $i++)
    {
      echo $i." Ciclo ejecutado<br>";
    }
    ?>
    <h4>Ciclo FOR con Tabla HTML</h4>

    <table border="1">
      <tr>
        <th>Número</th>
      </tr>

      <?php
      for($i = 1; $i <= 10; $i++)
      {
        ?>
        <tr>
          <td>
            <?php
            echo $i;
            ?>
          </td>
        </tr>
        <?php
      }
      ?>
    </table>


    <h4>Arreglo o lista en PHP</h4>
    <?php
    //Arreglo con variables enteras
    $arreglo1 = array(1,2,5,6,7);
    print_r($arreglo1);
    echo "<br>";
    echo $arreglo1[2]." ".$arreglo1[4];
    echo "<br>";
    //Arreglo con todo tipo de datos
    $arreglo2 = array(1,"manzana","peras",5,6.7);
    print_r($arreglo2);
    echo "<br>";
    echo $arreglo2[1];
    echo "<br>";
    //Arreglo con indices asociativos
    $arreglo3['nombre'] = "luis";
    print_r($arreglo3);
    echo "<br>";
    echo $arreglo3['nombre'];
    ?>

    <h4>Recorriendo arreglo</h4>
    <?php
    //Recorrer arreglo1
    $cantidad_indice = sizeof($arreglo1);
    echo " El tamaño del arreglo1 es : ".$cantidad_indice;
    echo "<br>";
    for($i = 0; $i < $cantidad_indice; $i++)
    {
      echo $arreglo1[$i]."<br>";
    }
    ?>
</body>
</html>
