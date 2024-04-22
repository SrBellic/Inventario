<?php
    require_once "config/conexionDB.php";
    include 'config/validarUsuario.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap-5.3.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/text_styles.css">
        <link rel="stylesheet" href="css/border_style.css">
        <link rel="stylesheet" href="css/button_styles.css">
        <title>DEISANARTE</title>
    </head>
    <body class="bg-color-magenta">
        <main style="height:75vh;" class="item-center bg-color-magenta">
            <div class="container w-75 mt-5">
                <div class="row">
                    <div class="rounded bg-light shadow">
                        <div class="row">
                            <picture class="col d-none d-lg-block py-5 text-center border-right-magenta">
                                <img src="img/icono.png" alt="Isotipo DEISANARTE" width="350px">
                            </picture>
                            <section class="col mx-2 py-5">
                                <h2 class="text-center">Inicia Sesión</h2>
                                <form action="#" method="post" class="my-4">
                                    <label for="user" class="form-label fs-4">Usuario<img src="assets/favicons/system/user32x32.png" class="mb-1 " width="24px"></label>
                                    <input type="text" class="form-control fs-4 bg-white shadow my-2" name="user">
                                    <label for="pass" class="form-label fs-4">Contraseña<img src="assets/favicons/system/pass32x32.png" class="mb-1 ms-1" width="24px"></label>
                                    <input type="password" class="form-control fs-4 bg-white shadow my-2" name="pass">
                                    <br>
                                    <div class="d-flex justify-content-center">
                                        <input type="submit" class="button-cyan fw-bold shadow w-50" value="INGRESAR">
                                    </div>
                                </form>
                                <div class="text-center">
                                    <br>
                                    <h6>Olvidé mi contraseña. <a href="pages/restore_pass.html">Recuperar</a>.</h6>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <br>
        <br>
        <footer style="height: 17.2vh;" class="bg-color-gray">
            <hr>
            <div class="container mx-5">
                <div class="row">
                    <div class="col">
                        <small class="fs-6">Contactanos:</small>
                        <br>
                        <small class="fs-6"><a href="https://api.whatsapp.com/message/ZHW4NUVU4VXVI1?autoload=1&app_absent=0"  class="link-gray">Whatsapp</a></small>
                        <img src="assets/favicons/whatsapp/whatsapp24x24.png">
                        <br>
                        <small class="fs-6"><a href="https://www.instagram.com/deisanarte?igsh=czhpZzJzcWZnaTI1"  class="link-gray">Instagram</a></small>
                        <img src="assets/favicons/instagram/instagram24x24.svg">
                        <br>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>