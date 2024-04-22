<?php
    require_once "config/conexionDB.php";
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
                                <form action="#" class="my-4">
                                    <label for="user" class="form-label fs-4">Usuario<img src="assets/favicons/system/user32x32.png" class="mb-1 " width="24px"></label>
                                    <input type="text" class="form-control bg-white shadow my-2" name="user">
                                    <label for="pass" class="form-label fs-4">Contraseña<img src="assets/favicons/system/pass32x32.png" class="mb-1 ms-1" width="24px"></label>
                                    <input type="password" class="form-control bg-white shadow my-2" name="pass">
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
                <div class="row item-div">
                    <div class="col-3">
                        <small>Contactanos:</small>
                        <br>
                        <small><a href="https://api.whatsapp.com/message/ZHW4NUVU4VXVI1?autoload=1&app_absent=0"  class="link-gray">Whatsapp</a></small>
                        <img src="assets/favicons/whatsapp/whatsapp24x24.png">
                        <br>
                        <small><a href="#"  class="link-gray">Instagram</a></small>
                        <img src="assets/favicons/instagram/instagram24x24.svg">
                        <br>
                        <small><a href="#"  class="link-gray">Correo Electrónico</a></small>
                        <img src="assets/favicons/email/email24x24.png">
                    </div>
                    <div class="col-3">
                        <div class="mt-4">
                            <small>Nos ubicamos en:</small>
                            <br>
                            <small>Calle Bolívar, C.C. Galerías Baruta, PB, Local 01</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mt-5 text-end">
                            <h5><a href="#" class="link-gray">Reportar fallo <img src="assets/favicons/system/bug24x24.png" alt=""></a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>