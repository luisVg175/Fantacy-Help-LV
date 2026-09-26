<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fantacy Help LV. indice</title>
    <link rel="Icon" href="/img/img0.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/framework/LoginLogin.css">
    <link rel="stylesheet" href="/framework/mainStyle.css">
</head>

<body>
    <div class="LoginLogin-div-background-difuminado">

        <form action="index.php" method="post">
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
                </ul>

                <hr class="my-3" style="border-top: 2px solid #6c757d;">
                
                <ul class="navbar-nav align-items-lg-center">
                    <li>
                        <input type="submit" value="iniciar sesión">
                    </li>
                </ul>
            </div>
        </form>
        <hr class="my-3" style="border-top: 2px solid #6c757d;">
        <div class="loginLogin-div-ayudaMadre">

            <div class="loginLogin-div-ayuda">
                <a href="/page/Cuenta-Crear-Olbidar/contraOlvi.php" class="link-opacity-25, link-secondary link-offset-2 link-underline-opacity-25
                link-underline-opacity-100-hover, ">¿Te olvidaste la contraseña?
                </a>
            </div>
            <div class="loginLogin-div-crearCuenta">
                <a type="submit" href="/page/Cuenta-Crear-Olbidar/crearCuenta.php" class="link-opacity-25, link-secondary link-offset-2 link-underline-opacity-25
                link-underline-opacity-100-hover, ">¿No tienes cuenta?
                </a>
            </div>


        </div>
    </div>
</body>

</html>

<?php
//echo "{$_POST["correo"]}.<br>";
//echo "{$_POST["contra"]}.<br>";
?>