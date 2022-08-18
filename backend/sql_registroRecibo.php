<?php
    session_start();
    include("conexion.php");
    date_default_timezone_set("America/Bogota");

    $queryRecibo = sqlsrv_query($conn,"SELECT * FROM RECIBO WHERE Recibo_NroRecibo = '$_POST[nrorecibo]'");
    if(sqlsrv_has_rows($queryRecibo)){
        echo ('<script type="text/javascript">window.location.href = "../index.php?mensaje=Ya Existe el Recibo Digitado&codContribuyente='.$_POST['codContribuyente'].'&nombres='.$_POST['nombres'].'&fecha='.$_POST['fecha'].'&monto='.$_POST['monto'].'"</script>');
    }

    $queryInsert = "INSERT INTO RECIBO(Recibo_NroRecibo, Recibo_CodContribuyente, Recibo_Nombres, Recibo_Fecha, Recibo_FechaRegistro, Recibo_UsuarioRegistro, Recibo_Monto, Recibo_Activo)
    VALUES('$_POST[nrorecibo]','$_POST[codContribuyente]','$_POST[nombres]','$_POST[fecha]','".date("Y-m-d H:i:s")."','$_SESSION[IdUsuario]','$_POST[monto]','$_POST[activo]')";

    if(sqlsrv_query($conn,$queryInsert)){
        
        echo('<script type="text/javascript">window.location.href = "../index.php?mensaje=Registro Correcto"</script>');
       //die("Registro Corercto"); 
    }else{
        die(print_r(sqlsrv_errors(), true));
        
    }
?>