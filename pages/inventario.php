<?php
    require_once "../config/conexionDB.php";
    include '../config/tablas.php';
?>  
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap-5.3.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/text_styles.css">
        <link rel="stylesheet" href="../css/border_style.css">
        <link rel="stylesheet" href="../css/button_styles.css"
        <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
        <title>Inventario</title>
    </head>
    <body class="bg-light">
        <header class="bg-color-magenta px-5 py-3">
            <nav class="navbar navbar-expand-lg bg-color-magenta container">
                <div class="container-fluid">
                    <h1 class="navbar-brand text-white fs-3" href="#">INVENTARIO <img src="../assets/favicons/system/trolley32x32.png" class="mb-2" alt="Inventario"></h1>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup"> 
                        <div class="navbar-nav">
                            <a href="../index.php" class="nav-link text-white fs-3">Cerrar Sesión<img src="../assets/favicons/system/icons8-logout-48.png" width="32px" alt="Cerrar Sesión"></a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <main class="mx-5 px-5">
            <div class="item-div mt-4">
                <aside class="mt-3 col d-none d-lg-block">
                    <picture>
                        <img src="../img/logo.svg" alt="Logotipo" width="300px">
                    </picture>
                </aside>
                <section class="col">
                    <input type="text" id="search" class="form-control mb-2 shadow" placeholder="Buscar...">
                    <table id="tabla" class="table table-responsive table-hover shadow border">
                        <thead class="text-center">
                            <tr>
                                <th>Producto</th>
                                <th>Código</th>
                                <th>Proveedor</th>
                                <th>Precio $</th>
                                <th>Precio Bs</th>
                                <th>Cantidad Disponible</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php 
                                llenar_inventario($conn);
                            ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </main>
        <script src="../js/bootstrap/bootstrap.bundle.min.js"></script>
        <script src="../js/search.js"></script>
    </body>
</html>