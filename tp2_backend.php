<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Practico 2</title>
  </head>
  <body>
    <h1>Punto 1</h1>
    <?php
    $a = 8;
    if ($a>0) {
      echo "$a es un numero positivo";
    } else {
      echo " $a NO es un numero positivo";
    }

     ?>
     <h1>Punto 2</h1>
     <?php
     $b = 5;
     if ($b > 1 and $b < 10) {
       echo "$b es un numero mayor a 1 y menor que 10";
     } else {
       echo "$b NO es numero mayor a 1 y menor que 10";
     }
      ?>
      <h1>Punto 3</h1>
      <?php
      $c = 11;
      if ($c > 10) {
        echo "$c es un numero mayor a 10";
      } elseif ($c < 2) {
        echo "$c es un numero menor a 2";
      } else {
        echo "$c es un numero entre 2 y 10";
      }
       ?>
       <h1>Punto 4</h1>
       <?php
       $numero1 = 10;
       $numero2 = 16;
       $totalsuma=$numero1+$numero2;
       $totalresta=$numero1-$numero2;
       $totalmult=$numero1*$numero2;
       $totaldiv=$numero1/$numero2;
       $totalres=$numero1%$numero2;
       echo "<h3> Numero 1 =$numero1 <br> Numero 2 =$numero2 <br> ";
       if ($numero1>$numero2) {
         echo "<h3> Suma ($totalsuma) <br><h3> Resta ($totalresta)<br>";

       }  elseif ($numero2 > $numero1) {
         echo "<h3> Multiplicacion ($totalmult)<b3><h3> Division entera
          ($totaldiv)<br><h3> Resto ($totalres)<br> ";
       } else {
       echo "Los numeros ingresados son iguales";
        }
        ?>

  </body>
</html>
