<?php include("svg.php"); ?>
<header class="sticky-top">
    <div class="px-3 py-2 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="index.php" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                    <img class="d-block mx-auto" src="img/favicon.png" alt="" width="70" height="90">
                </a>

                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                    <li>
                        <a href="index.php" class="nav-link text-white">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                <use xlink:href="#home" />
                            </svg>
                            Inicio
                        </a>
                    </li>
                    <!-- <li>
                        <a href="modificarSeccion.php" class="nav-link text-white">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                <use xlink:href="#speedometer2" />
                            </svg>
                            Modificar
                        </a>
                    </li> -->
                    <!-- <li>
                        <a href="#" class="nav-link text-white">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                <use xlink:href="#grid" />
                            </svg>
                            Products
                        </a>
                    </li> -->
                    <li>
                        <a href="#" class="nav-link text-white" onclick="confirmar()">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                <use xlink:href="#people-circle" />
                            </svg>
                            Cerrar Sesion
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<script>
    function confirmar() {
        var resultado = window.confirm('¿SEGURO QUE QUIERE CERRAR SESION?');
        if (resultado === true) {
            window.location.href = "backend/salirSesion.php";
        }
    }
</script>