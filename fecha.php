<?php
// la zona horaria por defecto en el php.ini
echo date_default_timezone_get ();
echo "<br>";
echo date('Y-m-d H:i:s');
echo "<br>";
echo "<br>";

// fijar tu zona horaria "momentaneamente"
date_default_timezone_set("America/Bogota");
echo "America/Montevideo:";//.time();
echo "<br>";

// tu fecha y hora correctas
echo date('Y-m-d H:i:s');
?>