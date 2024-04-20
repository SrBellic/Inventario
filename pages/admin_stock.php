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
        <link rel="stylesheet" href="../css/button_styles.css">
        <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
        <title>Inventario</title>
    </head>
    <body class="bg-light">
        <header class="bg-color-magenta py-3">
            <nav class="navbar mx-5">
                <div class="container-fluid">
                    <h1 class="navbar-brand text-white fs-3">ADMINISTRACIÓN<img src="../assets/favicons/system/admin48x48.png" class="mb-2" alt=""></h1>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
        </header>
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="d-flex justify-content-end text-end mx-5">
                <div class="navbar-nav bg-color-darkmagenta ps-5 pe-2 py-2 rounded-bottom">
                    <a href="../index.html" class="link-white fs-5">Cerrar Sesión<img src="../assets/favicons/system/icons8-logout-48.png" width="32px" alt="Cerrar Sesión"></a>
                </div>
            </div>
        </div>
        <main class="mx-5 px-5">
            <div class="item-div mt-4">

                <aside class="mt-3 col d-none d-lg-block">
                    <div class="row">
                        <picture>
                            <img src="../img/logo.svg" alt="Logotipo" width="420px">
                            <hr width="54%">
                        </picture>
                    </div>
                    <div class="row">
                        <h2>USUARIO</h2>
                        <br>
                        <div class="row mt-1">
                            <button class="button-add fw-bold" data-bs-target="#add"  data-bs-toggle="modal">
                                <div class="contenido">
                                  <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/add32x32.png"></span>
                                  <span class="texto fs-5">AGREGAR</span>
                                </div>
                            </button>
                        </div>
                        <div class="row mt-2">
                            <div class="button-edit fw-bold">
                                <div class="contenido">
                                  <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/edit24x24.png"></span>
                                  <span class="texto fs-5">EDITAR</span>
                                </div>
                            </div>                              
                        </div>
                        <div class="row mt-2">
                            <div class="button-delete fw-bold">
                                <div class="contenido">
                                  <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/delete24x24.png"></span>
                                  <span class="texto fs-5">BORRAR</span>
                                </div>
                            </div>                              
                        </div>
                    </div>
                </aside>

                <section class="col">

                    <section class="container text-center ms-1 d-sm-block">
                        <div class="row ms-5 mb-2">
                            <div class="col d-lg-none mt-2">
                                <button class="button-sm-add fw-bold" data-bs-target="#add"  data-bs-toggle="modal">
                                    <div class="contenido">
                                      <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/add32x32.png"></span>
                                      <span class="texto fs-5">AGREGAR</span>
                                    </div>
                                </button>
                            </div>
                            <div class="col d-lg-none mt-2">
                                <div class="button-sm-edit fw-bold"    >
                                    <div class="contenido">
                                      <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/edit24x24.png"></span>
                                      <span class="texto fs-5">EDITAR</span>
                                    </div>
                                </div>                              
                            </div>
                            <div class="col d-lg-none my-2">
                                <div class="button-sm-delete fw-bold"  >
                                    <div class="contenido">
                                      <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/delete24x24.png"></span>
                                      <span class="texto fs-5">BORRAR</span>
                                    </div>
                                </div>                              
                            </div>
                        </div>
                    </section>

                    <input type="text" id="search" class="form-control-lg w-100 border shadow mb-2" placeholder="Buscar">
                    <table id="tabla" class="table table-responsive table-hover border shadow">
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
        <div class="modal fade" id="add" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5">Registro de Producto</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-scroll">
                    <form action="#">
                        <label for="sucursal" class="form-label">Sucursal:</label>
                        <select class="form-select" name="sucursal">
                            <option value="1">Baruta</option>
                            <option value="2">Libertador</option>
                            <option value="3">Chacao</option>
                        </select>
                        <label for="proveedor" class="form-label">Proveedor:</label>
                        <select class="form-select" name="proveedor">
                            <option value="1">TodoEstampas</option>
                            <option value="2">TermosPlex</option>
                            <option value="3">El Castillo</option>
                        </select>
                        <br>
                        <div class="row">
                            <div class="row ms-1">
                                <label for="product" class="form-label">Detalles de Producto:</label>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="Producto" name="producto">
                                        <label for="producto" class="form-label">Producto</label>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="Código" name="codigo">
                                        <label for="codigo" class="form-label">Código</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row ms-1">
                                <label for="precio_compra" class="form-label">Precios de Compra:</label>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="Precio $" name="precio_compra$">
                                        <label for="precio_venta$" class="form-label">Precio $</label>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="Precio Bs" name="precio_comprabs">
                                        <label for="precio_comprabs" class="form-label">Precio Bs</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row ms-1">
                                <label for="precio_venta" class="form-label">Precios de Venta:</label>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="Precio $" name="precio_venta$">
                                        <label for="precio_venta$" class="form-label">Precio $</label>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="Precio Bs" name="precio_ventabs">
                                        <label for="precio_ventabs" class="form-label">Precio Bs</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row ms-1">
                                <div class="col-3">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" max="100" maxlength="3" placeholder="Cantidad" name="cantidad">
                                        <label for="cantidad" class="form-label">Cantidad</label>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="row ms-1 mt-4">
                                <textarea name="descripcion" class="form-control ms-2" Placeholder="Descripción" rows="4" style="resize: none;"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="button-add fw-bold">
                        <div class="contenido">
                            <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/check24x24.svg" width="30px"></span>
                            <input type="submit" class="texto fw-bold" style="color: white;" id="verificar" value="REGISTRAR">
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <script src="../js/bootstrap/bootstrap.bundle.min.js"></script>
        <script src="../js/search.js"></script>
    </body>
</html>