<?php

// BD local

$serverName = "DESKTOP-74PP20K\DEVERICK";
$connectionInfo = array("Database" => "RecibosSiget");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn) {
    //echo "Se establecio la conexion a la base de datos de Registro de RecibosSiget";
    //die();
} else {
    echo "ERROR DE CONEXION A LA BASE DE DATOS TALLERES";
    die();
}
