<?php
include("backend/conexion.php");
if ($_SESSION['usuario'] == "adminOtic" or $_SESSION['usuario'] == "kwong") {
    $queryDetalle = "SELECT * FROM RECIBO";
} else {

    $queryDetalle = "SELECT * FROM RECIBO WHERE Recibo_UsuarioRegistro = '$_SESSION[IdUsuario]'";
}
$resultadoDetalle = sqlsrv_query($conn, $queryDetalle);
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Mis Registros</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
        <li class="breadcrumb-item active">Listado</li>
    </ol>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nro. Recibo</th>
                <th scope="col">Cod. Contribuyente</th>
                <th scope="col">Nombres</th>
                <th scope="col">Pago Total</th>
                <th scope="col">Fecha</th>
                <th scope="col">Usuario</th>
                <th scope="col">Estado</th>
                <th scope="col">Proceso</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $cont = 1;
            while ($rowDetalle = sqlsrv_fetch_array($resultadoDetalle)) {
                $resultUsuario = sqlsrv_query($conn, "SELECT Usuario_Username FROM USUARIO Where Usuario_Id=$rowDetalle[Recibo_UsuarioRegistro]");
                $rowUsuario = sqlsrv_fetch_array($resultUsuario);
            ?>
                <tr>
                    <th scope="row"><?php echo ($cont); ?></th>
                    <td><?php echo ($rowDetalle['Recibo_NroRecibo']); ?></td>
                    <td><?php echo ($rowDetalle['Recibo_CodContribuyente']); ?></td>
                    <td><?php echo ($rowDetalle['Recibo_Nombres']); ?></td>
                    <td><?php echo ($rowDetalle['Recibo_Monto']); ?></td>
                    <td><?php echo ($rowDetalle['Recibo_Fecha']->format('d/m/Y')); ?></td>
                    <td><?php echo ($rowUsuario['Usuario_Username']); ?></td>
                    <td><?php
                        if ($rowDetalle['Recibo_Activo'] == NULL) echo ("null");
                        else if ($rowDetalle['Recibo_Activo'] == "") echo ("--");
                        else if ($rowDetalle['Recibo_Activo'] == "1") echo ("Activo");
                        else echo ("Extornado"); ?></td>
                    <td class="mensajeEstado fw-bold">Iniciando</td>
                </tr>
            <?php
                $cont = $cont + 1;
            }
            ?>
            <!-- <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>30-06-2022</td>
                <td>1</td>
                <td>2</td>
                <td class="mensajeEstado fw-bold">Iniciando Proceso</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>03-06-2022</td>
                <td>3</td>
                <td>4</td>
                <td class="mensajeEstado fw-bold">Iniciando Proceso</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>06-06-2022</td>
                <td>5</td>
                <td>6</td>
                <td class="mensajeEstado fw-bold">Iniciando Proceso</td>
            </tr> -->
        </tbody>
    </table>
</div>