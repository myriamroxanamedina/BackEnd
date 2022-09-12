<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Practico 1</title>
  </head>
  <body>
    <h1>Punto 1</h1>
    <?php
      echo "Hola Mundo";
     ?>
     <h1>Punto 2</h1>
     <?php
     $saludo = "Hola Mundo";
     echo $saludo;
      ?>
      <h1>Punto 3</h1>
      <p>Variables a=10 b=5</p>
      <h2>Suma</h2>
      <?php
      $a= 10;
      $b= 5;
      $suma = $a + $b;
      echo $suma;
   ?>
   <br>
   <hr>
   <h2>Resta</h2>
   <?php
      $resta = $a - $b;
      echo $resta;
       ?>
       <br>
       <hr>
       <h2>Multiplicacion</h2>

<?php
      $multiplicacion = $a * $b;

      echo $multiplicacion;
      ?>
      <br>
      <hr>
      <h2>Division</h2>

      <?php
      $division =$a/$b;

      echo $division;
      ?>
      <br>
      <hr>
      <h2>Resto</h2>

      <?php
      $resto =$a%$b;
      echo $resto;
      ?>
      <h1>Punto 4</h1>
<p>Convertir 20 grados Celsius a Fahrenheit</p>
<?php
$grado_c = 20;
$f = ($grado_c*1.8)+32;
echo $f;

 ?>
 <br>
 <hr>
 <h1>Punto 5</h1>
 <p>A- Calcular el perimetro de un rectangulo Base 18 cm y altura 12 cm</p>
 <?php
 $base =18;
 $altura =12;
  $perimetro = 2*($base)+2*($altura);
  echo $perimetro;
    ?>
    <br>
    <hr>
    <p>Calcular el area de un rectangulo Base 18 cm y altura 12 cm</p>

    <?php
    $base =18;
    $altura =12;
  $area = $base*$altura;
  echo $area;
?>
<br>
<hr>
<p>B- Calcular el perímetro de un círculo dado que su radio es de 30cm</p>
<?php
$radio = 30;
$diametro = $radio*2;
$pi = 3.1416;
$perimetro= $pi*$diametro;
echo $perimetro;

 ?>
 <br>
 <hr>
 <p>Calcular el area de un círculo dado que su radio es de 30cm</p>
<?php
$radio = 30;
$diametro = $radio*2;
$pi = 3.1416;
$area= $pi*($radio*$radio);
echo $area;

 ?>
  </body>
</html>
