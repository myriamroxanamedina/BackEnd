<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TP4</title>
  </head>
  <body>
    <h1>Punto 1</h1>
    <p>Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro</p>
<?php
$numpar = ["2","4","6","8","10","12","14","16","18","20"];
foreach ($numpar as  $valor) {
  print "<p> $valor </p>\n";
}
 ?><hr>
 <h1>Punto 2</h1>
 <p>Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
matriz. Mostrar el esquema del array con print_r()</p>
 <?php
 $persona = ["Pedro","Ana","34","1"];
 print_r($persona);
  ?><hr>
<h1>Punto 3</h1>
<p>Crear un array asociativo e introducir los siguientes valores:
Nombre: Pedro
Apellido: Torres
Dirección: Av. Mayor 3703
Teléfono: 1122334455</p>
<?php
$datos =[
'Nombre'=> "Pedro",
'Apellido'=>"Torres",
'Direccion'=>"Av. Mayor 3703",
'Telefono'=>"1122334455"];
  print_r($datos);

 ?><hr>
 <h1>Punto 4</h1>
 <p>Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid</p>

<?php
$ciudades = ["Madrid","Barcelona","Londres","New York","Los Ángeles", "Chicago"];
print "<pre>\n";
print_r($ciudades);
print"<pre>\n";
foreach ($ciudades as $indice => $valor)
print "<p> La ciudad con el indice $indice tiene el nombre $valor</p>\n";

?><hr>
<h1>Punto 5</h1>
<p>Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD</p>
<?php
$ciudad = [
'MD' => "Madrid",
'BCL'=> "Barcelona",
'LD'=> "Londres",
'NY'=> "New York",
'LA'=> "Los Angeles",
'CCG'=> "Chicago",
];
print "<pre>\n";
print_r($ciudad);
print"<pre>\n";
foreach ($ciudad as $indice => $valor)
print "<p> El indice $valor tiene el nombre $indice</p>\n";

 ?>
    <body>
</html>
