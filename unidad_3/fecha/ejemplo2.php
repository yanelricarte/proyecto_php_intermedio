<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");
$fecha_actual = date("l-m-Y");
echo "La fecha actual es: " . $fecha_actual;

 
$prueba = time();
echo "<br>".$prueba;


$fecha = getdate(time());

echo "<p> Fecha: ".date("d:m:Y-h:s", strtotime("+24hours")). "</p>";

echo "<p> Fecha: ".date("d:m:Y-h:s", strtotime("last Monday")). "</p>";

echo "<p> Fecha: ".date("d:m:Y-h:s", strtotime("next Monday")). "</p>";