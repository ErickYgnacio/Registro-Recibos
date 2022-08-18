<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Inicio de Sesion</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/cssLogin.css" rel="stylesheet">

</head>

<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form action="backend/sql_validacion.php" method="POST">
            <img class="mb-1" src="img/favicon.png" alt="" width="140" height="140">
            <h1 class="h3 mb-3 fw-normal">Inicio de Sesión</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
                <label for="usuario">Usuario</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="contrasenia" name="contrasenia" placeholder="Contraseña" required>
                <label for="contrasenia">Contraseña</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar Sesión</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2019–2022</p>
        </form>
    </main>
</body>

<?php
if (isset($_GET['mensaje'])) {
    echo ("<script>alert('$_GET[mensaje]');</script>");
}
?>

</html>