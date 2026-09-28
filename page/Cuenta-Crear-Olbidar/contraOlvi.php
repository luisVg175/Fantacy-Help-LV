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

        <div class="conteiner">
            <div class="LoginLogin-div-titulo">
                <span>bienvenido a <strong>Fantacy Help LV~</strong></span>
            </div>

            <hr class="my-1" style="border-top: 2px solid #ffffff;">

            <ul class="navbar-nav align-items-lg-center">

                <li>
                    <label>correo</label>
                </li>
                <li>
                    <input type="text" id="correo" name="correo" placeholder="escribe tu correo" class="LoginLogin-input-">
                    <input type="submit" value="enviar codigo" class="loginLogin-input-button-codigo">
                </li>
            </ul>

            <hr class="my-3" style="border-top: 2px solid #6c757d;">

            <ul class="navbar-nav align-items-lg-center">
                <li>
                    <input type="text" id="correo" name="correo" placeholder="escribe el codigo" class="LoginLogin-input-">
                    <input type="submit" value="verificar" class="loginLogin-input-button-codigo">
                </li>

            </ul>

            <hr class="my-3" style="border-top: 2px solid #ffffff;">

            <!--capchat-->
            <p>colocar capchat</p>

            <hr class="my-3" style="border-top: 2px solid #6c757d;">
            <ul class="navbar-nav align-items-lg-center">
                <li>
                    <input type="submit" value="iniciar sesión">
                </li>
            </ul>
        </div>

        <hr class="my-3" style="border-top: 2px solid #6c757d;">

        <div class="loginLogin-div-ayudaMadre">
            <div class="loginLogin-div-ayuda">
                <a href="/index.php" class="link-secondary link-opacity-75 link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                    ¿Quieres regresar?
                </a>
            </div>
        </div>
    </div>
</body>
<link rel="stylesheet" href="">

</html>