<?php
require_once "../../BackEnd/funciones/funcionUni.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php
headUniversal();
?>

<body>
    <div class="LoginLogin-div-background-difuminado">

        <form action="/index.php" method="post">
            <div class="conteiner">
                <div class="LoginLogin-div-titulo">
                    <span>Bienvenido a <strong>Fantacy Help LV~</strong></span><br>
                </div>
                <ul class="navbar-nav align-items-lg-center">
                    <li>
                        <label>Correo</label>
                    </li>
                    <li>
                        <input type="text" id="correo" name="correo" placeholder="escribe tu correo" class="LoginLogin-input-">
                    </li>


                    <li>

                        <label>Contraseña</label>
                    </li>
                    <li>
                        <input type="password" id="contra" name="contra" placeholder="escribe tu contraseña" class="">
                    </li>


                    <li>
                        <label>Repetir Contraseña</label>
                    </li>
                    <li>
                        <input type="password" id="contra" name="contra" placeholder="escribe tu contraseña" class="">
                    </li>
                </ul>

                <br>

                <ul class="navbar-nav align-items-lg-center">
                    <li>
                        <input type="submit" value="iniciar sesión">
                    </li>
                </ul>

            </div>
        </form>

        <hr class="my-4" style="border-top: 2px solid #6c757d;">

        <div class="loginLogin-div-ayudaMadre">
            <div class="loginLogin-div-ayuda">
                <a href="/index.php" class="link-secondary link-opacity-75 link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                    ¿Quieres regresar?
                </a>
            </div>
        </div>
    </div>
</body>

</html>