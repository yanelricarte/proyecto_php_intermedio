<?php 

date_default_timezone_set('America/Argentina/Buenos_Aires');

echo date("d/m/Y:H:i") . "<br>";

// Obtiene fecha actual en formato largo (nombre del dia)
$fecha_actual = date('l-m-Y');
echo "La fecha actual es: $fecha_actual";

// Obtiene la hora actual en formato timestamp (segundos desde el 1 de enero de 1970)
$hora_actual = time();
echo "<h3> $hora_actual </h3>";

//echo "La hora actual es: " . date("H:i:s", $hora_actual);

// Obtiene la hora actual en formato de horas, minutos y segundos
$hora_actual2 = getdate(time());
echo "<h3> $hora_actual2[hours]:$hora_actual2[minutes]:$hora_actual2[seconds] </h3>";


// Convierte la fecha actual a formato d-m-Y para manipulación

$fecha_formato = date('d-m-Y', strtotime(str_replace('/', '-', $fecha_actual)));



// Calcula la fecha de la clase anterior (una semana antes)
$clase_anterior = date('d-m-Y', strtotime('-1 week', strtotime($fecha_formato)));

// Calcula la fecha de la clase posterior (una semana después)
$clase_posterior = date('d-m-Y', strtotime('+1 week', strtotime($fecha_formato)));



echo "La clase anterior fue el: $clase_anterior <br>";
echo "La clase actual es el: $fecha_formato <br>";
echo "La clase posterior será el: $clase_posterior <br>";


// Calular diferencia de dias entre dos fecha 
echo "<h2> Ejemplo: Diferencia de dias entre dos fechas </h2>";

$fecha1 = '2026-05-26';
$fecha2 ='2026-06-10';

$datetime1 = new DateTime($fecha1);
$datetime2 = new DateTime($fecha2);
$intervalo = $datetime1->diff($datetime2);
echo "La diferencia entre las fechas es: " . $intervalo->days . " días.";


// Sumar dias a una fecha
echo "<h2> Ejemplo: Sumar días a una fecha </h2>";
$fecha_base = '2026-05-26';
$dias_a_sumar = 15;
$nueva_fecha = date('Y-m-d', strtotime($fecha_base . " + $dias_a_sumar days"));

echo "La nueva fecha después de sumar $dias_a_sumar días es $nueva_fecha.";


// Validar una fecha
echo "<h2> Ejemplo: Validar una fecha </h2>";
$fecha_a_validar = '2026-09-35'; // Fecha inválida

$es_valida = DateTime::createFromFormat('Y-m-d', $fecha_a_validar);

if ($es_valida && $es_valida->format('Y-m-d') === $fecha_a_validar) {
    echo "La fecha $fecha_a_validar es válida.";
} else {
    echo "La fecha $fecha_a_validar no es válida.";
}
