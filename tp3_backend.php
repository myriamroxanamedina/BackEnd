<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TP3</title>
  </head>
  <body>
    <h1>Punto 1</h1>
    <p> Mostrar los números del 1 al 100</p>
    <?php
    for ( $i = 1 ;$i <=100; $i++ ){
      echo $i . "-";
    }
?><hr>
<h1>Punto 2</h1>
<p>Mostrar los números del 100 al 1</p>
<?php
for ( $i = 100 ;$i >= 1; $i-- ){
  echo $i . "-";
}
     ?><hr>
     <h1>Punto 3</h1>
     <p>Mostrar los números pares del 1 al 100</p>
     <?php
     for ( $i = 2 ; $i<=100; $i=$i+2 ){
       echo $i . "-";
     }

      ?><hr>
    <h1>Punto 4</h1>
    <p>Mostrar los números impares del 1 al 100</p>
    <?php
    for ( $i = 1 ; $i<=100; $i=$i+2 ){
    echo $i . "-";
      }

   ?><hr>
<h1>Punto 5</h1>
<p>Mostrar la suma de los numeros del 1 al 20</p>
<?php
$suma = 0;
for ($i = 1; $i <= 20; $i++) {
 $suma += $i;
}
print "<p>La suma de los números de 1 a 20 es $suma </p>\n";

   ?><hr>
   <h1>Punto 6</h1>
   <p>Mostrar la suma de los numeros pares del 1 al 20</p>
   <?php
   $suma = 0;
   for ($i = 2; $i <= 20; $i=$i+2) {
    $suma += $i;
   }
   print "<p>La suma de los números pares de 1 a 20 es $suma </p>\n";
 ?><hr>
</body>
</html>
