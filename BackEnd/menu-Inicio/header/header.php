<?php
function headerUniversal()
{
?>
    <header class="header-main d-flex align-items-center justify-content-between px-4 py-2 w-100">
        <!-- Bloque Izquierdo: Logo y Título -->
        <div class="d-flex align-items-center gap-2 m-0 text-white fs-4">
            <a class="navbar-brand" href="#">
                <img src="/Assets/img0.png" alt="ICONlogo" class="header-imgIcon ">Fantacy Help LV
            </a>

            <ul class="header-btm-navbar nav d-flex align-items-center gap-3 m-0">

                <li class="nav-item">
                    <a href="#" class="nav-link text-white p-0">Universos</a>
                </li>
            </ul>

        </div>
        <nav>
            <ul class="nav d-flex align-items-center gap-3 m-0">

                <button class="dropdown btn p-0 border-0 bg-transparent text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <a href="">
                        <img src="/Assets/img05.png" alt="iconUser" width="50px" height="50px">
                    </a>
                </button>

                <ul class="dropdown-menu dropdown-menu-end shadow header-main">
                    <li>
                        <a class="nav-link text-white" href="#">Perfil de usuario</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="nav-link text-danger text-white" href="/page/Cuenta-Crear-Olbidar/contraOlvi.php">cambiar contraseña</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="nav-link text-danger text-white" href="/index.php">Cerrar sesión</a>
                    </li>
                </ul>
            </ul>

        </nav>
    </header>
<?php
}
?>