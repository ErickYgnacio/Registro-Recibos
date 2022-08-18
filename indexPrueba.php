<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    echo ('<script type="text/javascript">window.location.href = "login.php?mensaje=DEBE INICIAR SESION"</script>');
}
if (isset($_GET['mensaje'])) {
    echo ("<script>alert('$_GET[mensaje]');</script>");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Recibos</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
</head>

<body class="bg-light">
    <?php include("layouts/header.php"); ?>

    <div class="container pt-2">
        <main>
            <div class="py-3 text-center">
                <img class="d-block mx-auto mb-4" src="img/favicon.png" alt="" width="130" height="130">
                <h2>REGISTRO ENTRY SIGET</h2>
                <p class="lead">Pagina de ayuda para el Sistema SIGET. Cualquier error o inconveniente comunicarse con el area de Informatica para una posible solucion</p>
            </div>
            <hr class="my-4">
            <div class="row g-5">
                <div class="col-md-12 col-lg-12">
                    <h4 class="mb-3">Formulario de Registro</h4>
                    <form class="needs-validation" novalidate action="backend/sql_registroReciboPrueba.php" method="POST">

                        <br>

                        <div class="row gy-3">

                            <div class="col-md-2">
                                <label for="nrorecibo" class="form-label">Nro Recibo</label>
                                <input type="number" class="form-control" id="nrorecibo" name="nrorecibo" placeholder="Nro Recibo" min=0 maxlength="8" required>
                                <div class="invalid-feedback">
                                    Nro Recibo requerido
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="codContribuyente" class="form-label">Cod. Contribuyente</label>
                                <input type="number" class="form-control" id="codContribuyente" name="codContribuyente" placeholder="Codigo Contribuyente" min=0 required value=<?php if(isset($_GET['codContribuyente'])) echo($_GET['codContribuyente']);  ?>>
                                <div class="invalid-feedback">
                                    Codigo Contribuyente requerido
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="nombres" class="form-label">Nombres y Apellidos</label>
                                <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres y Apellidos" required value=<?php if(isset($_GET['nombres'])) echo($_GET['nombres']);  ?>>
                                <div class="invalid-feedback">
                                    Nombres y Apellidos requeridos requerido
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="fecha" class="form-label">Fecha</label>
                                <input type="date" class="form-control" id="fecha" name="fecha" required min="2022-06-30" max="2022-07-15" value=<?php if(isset($_GET['fecha'])) echo($_GET['fecha']);  ?>>
                                <div class="invalid-feedback">
                                    Fecha es requerido
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="monto" class="form-label">Total Pagado</label>
                                <input type="number" class="form-control" id="monto" name="monto" placeholder="Total Pagado del Recibo" min=0 required step=0.01 value=<?php if(isset($_GET['monto'])) echo($_GET['monto']);  ?>>
                                <div class="invalid-feedback">
                                    Total Pagado requerido
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="activo" class="form-label">Estado Recibo</label>
                                <select class="form-select" id="activo" name="activo" required>
                                    <option value="">Escoja una opcion</option>
                                    <option value="1">Activo</option>
                                    <option value="0">Externado</option>
                                </select>
                                <div class="invalid-feedback">
                                    Campo Estado Recibo requerido
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Registrar Recibo</button>
                    </form>
                </div>
            </div>
        </main>


        <div class="my-4"></div><br>

        <?php include("listado.php"); ?>

    </div>

    <?php include("layouts/footer.php"); ?>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/form-validation.js"></script>
</body>

</html>