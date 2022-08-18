<?php
session_start();
include("conexion.php");

$queryValidarUsuario = "SELECT * FROM USUARIO WHERE Usuario_Username='$_POST[usuario]' AND Usuario_Pass='$_POST[contrasenia]'";
$resultValidarUsuario = sqlsrv_query($conn, $queryValidarUsuario);

if (sqlsrv_has_rows($resultValidarUsuario)) {
    
    $rowUsuario = sqlsrv_fetch_array($resultValidarUsuario);
    $_SESSION['usuario'] = $rowUsuario['Usuario_Username'];
    $_SESSION['IdUsuario'] = $rowUsuario['Usuario_Id'];
    echo ('<script type="text/javascript">window.location.href = "../index.php"</script>');

}else{
    echo ('<script type="text/javascript">window.location.href = "../login.php?mensaje=USUARIO INCORRECTO"</script>');
}
