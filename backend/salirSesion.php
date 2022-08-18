<?php
    // 1. Retomamos la sesión
    session_start();
    // . Eliminamos las variables de sesión y sus valores
    $_SESSION = array();
    // 3. Eliminamos la cookie del usuario que identifaba a esa sesión, verifcando "si existía"
    if (ini_get("session.use_cookies")==true) {
    $parametros = session_get_cookie_params();
    setcookie(session_name(), '', time()-99999,
    $parametros["path"], $parametros["domain"],
    $parametros["secure"], $parametros["httponly"]);
    }
    // 4. Eliminamos el archivo de sesión del servidor2
    session_destroy();
    echo ('<script type="text/javascript">window.location.href = "../login.php?mensaje=SALIO DE SU SESION"</script>');
?>