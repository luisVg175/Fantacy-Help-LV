<?php
require_once "BackEnd/funciones/funcionUni.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fantacy Help LV</title>
    <link rel="Icon" href="/img/img0.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/framework/LoginLogin.css">
    <link rel="stylesheet" href="/framework/mainStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
</head>

<body>
    <div class="LoginLogin-div-background-difuminado">

        <!-- Agregamos id al formulario y evento onsubmit para ejecutar validación JS -->
        <form id="formLogin" action="index.php" method="post" onsubmit="return validarLogin(event)">
            <div class="conteiner">
                <div class="LoginLogin-div-titulo">
                    <span>Bienvenido a <strong>Fantacy Help LV~</strong></span><br>
                </div>
                <ul class="navbar-nav align-items-lg-center">
                    <li>
                        <label for="correo">Correo</label>
                    </li>
                    <li>
                        <input type="text" id="correo" name="correo" placeholder="escribe tu correo" class="LoginLogin-input-">
                    </li>
                    <li>
                        <label for="contra">Contraseña</label>
                    </li>
                    <li>
                        <input type="password" id="contra" name="contra" placeholder="escribe tu contraseña">
                    </li>
                </ul>

                <hr class="my-3" style="border-top: 2px solid #6c757d;">

                <ul class="navbar-nav align-items-lg-center">
                    <li>
                        <!-- Se corrigió type="submit" y se removió la etiqueta <a> interna -->
                        <button type="submit" class="loginlogin-bt-style">
                            Iniciar sesión
                        </button>
                    </li>
                </ul>

            </div>
        </form>

        <hr class="my-3" style="border-top: 2px solid #6c757d;">

        <div class="loginLogin-div-ayudaMadre">
            <div class="loginLogin-div-ayuda">
                <a href="/page/Cuenta-Crear-Olbidar/contraOlvi.php" class="link-opacity-75 link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                    ¿Te olvidaste la contraseña?
                </a>
            </div>
            <div class="loginLogin-div-crearCuenta">
                <a href="/page/Cuenta-Crear-Olbidar/crearCuenta.php" class="link-opacity-75 link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                    ¿No tienes cuenta?
                </a>
            </div>
        </div>
    </div>

    <!-- Script de validación con JS y SweetAlert2 -->
    <script>
        function validarLogin(event) {
            event.preventDefault(); // Evita que se recargue la página en index.php

            const correo = document.getElementById('correo').value.trim();
            const contra = document.getElementById('contra').value.trim();

            if (correo === '123' & contra === '12') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Campos incompletos',
                    text: 'Por favor, ingresa tu correo y contraseña.',
                    confirmButtonColor: '#3085d6'
                });
            } else {
                // Redirige manualmente a la página deseada
                window.location.href = "/page/PagInicio/menuInicio/main.php";
            }
        }
    </script>
</body>

</html>