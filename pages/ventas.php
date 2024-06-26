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
        <title>Ventas</title>
    </head>
    <body class="bg-light">
        <header class="bg-color-magenta py-3">
            <nav class="navbar mx-5">
                <div class="container-fluid">
                    <h1 class="navbar-brand text-white fs-3">VENTAS <img src="../assets/favicons/system/sales30.png" class="mb-3 mt-1 ms-1" alt="Administración de Usuarios"></h1>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navVentas" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
        </header>
        <div class="collapse" id="navVentas">
            <div class="d-flex justify-content-end text-end mx-5">
                <div class="navbar-nav bg-color-darkmagenta ps-5 pe-2 py-2 rounded-bottom">
                    <a href="../index.html" class="link-white fs-5">Cerrar Sesión<img src="../assets/favicons/system/icons8-logout-48.png" width="32px" alt="Cerrar Sesión"></a>
                </div>
            </div>
        </div>
        <main class="container">
            <div class="item-div mt-4">
                <div class="col-5">
                    <div class="row bg-white rounded border">
                        <!--Ejemplo de como se veria la tabla de inventario-->
                        <input type="text" id="search" class="form-control mb-2" placeholder="Buscar">
                        <div class="scroll-short">
                            <table id="tabla" class="table table-responsive table-hover">
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
                                    <tr>
                                        <td>gorras</td>
                                        <td>001</td>
                                        <td>PROVEEDOR</td>
                                        <td>$$$</td>
                                        <td>BsBsBs</td>
                                        <td>####</td>
                                    </tr>
                                    <tr>
                                        <td>Camisas</td>
                                        <td>00#</td>
                                        <td>PROVEEDOR</td>
                                        <td>$$$</td>
                                        <td>BsBsBs</td>
                                        <td>####</td>
                                    </tr>
                                    <tr>
                                        <td>gorras</td>
                                        <td>001</td>
                                        <td>PROVEEDOR</td>
                                        <td>$$$</td>
                                        <td>BsBsBs</td>
                                        <td>####</td>
                                    </tr>
                                    <tr>
                                        <td>gorras</td>
                                        <td>001</td>
                                        <td>PROVEEDOR</td>
                                        <td>$$$</td>
                                        <td>BsBsBs</td>
                                        <td>####</td>
                                    </tr>
                                    <tr>
                                        <td>gorras</td>
                                        <td>001</td>
                                        <td>PROVEEDOR</td>
                                        <td>$$$</td>
                                        <td>BsBsBs</td>
                                        <td>####</td>
                                    </tr>
                                    <tr>
                                        <td>gorras</td>
                                        <td>001</td>
                                        <td>PROVEEDOR</td>
                                        <td>$$$</td>
                                        <td>BsBsBs</td>
                                        <td>####</td>
                                    </tr>
                                    <tr>
                                        <td>gorras</td>
                                        <td>001</td>
                                        <td>PROVEEDOR</td>
                                        <td>$$$</td>
                                        <td>BsBsBs</td>
                                        <td>####</td>
                                    </tr>
                                    <tr>
                                        <td>gorras</td>
                                        <td>001</td>
                                        <td>PROVEEDOR</td>
                                        <td>$$$</td>
                                        <td>BsBsBs</td>
                                        <td>####</td>
                                    </tr>
                                    <tr>
                                        <td>gorras</td>
                                        <td>001</td>
                                        <td>PROVEEDOR</td>
                                        <td>$$$</td>
                                        <td>BsBsBs</td>
                                        <td>####</td>
                                    </tr>
                                    <tr>
                                        <td>gorras</td>
                                        <td>001</td>
                                        <td>PROVEEDOR</td>
                                        <td>$$$</td>
                                        <td>BsBsBs</td>
                                        <td>####</td>
                                    </tr>
                                    <tr>
                                        <td>gorras</td>
                                        <td>001</td>
                                        <td>PROVEEDOR</td>
                                        <td>$$$</td>
                                        <td>BsBsBs</td>
                                        <td>####</td>
                                    </tr>
                                    <tr>
                                        <td>gorras</td>
                                        <td>001</td>
                                        <td>PROVEEDOR</td>
                                        <td>$$$</td>
                                        <td>BsBsBs</td>
                                        <td>####</td>
                                    </tr>
                                    <tr>
                                        <td>gorras</td>
                                        <td>001</td>
                                        <td>PROVEEDOR</td>
                                        <td>$$$</td>
                                        <td>BsBsBs</td>
                                        <td>####</td>
                                    </tr>
                                    <tr>
                                        <td>gorras</td>
                                        <td>001</td>
                                        <td>PROVEEDOR</td>
                                        <td>$$$</td>
                                        <td>BsBsBs</td>
                                        <td>####</td>
                                    </tr>
                                    <tr>
                                        <td>Termos</td>
                                        <td>00#</td>
                                        <td>PROVEEDOR</td>
                                        <td>$$$</td>
                                        <td>BsBsBs</td>
                                        <td>####</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--FIN: Ejemplo de como se veria la tabla de inventario-->
                    </div>
                    <div class="row mt-4 d-flex justify-content-end">
                        <button type="reset" class="button-delete fw-bold" data-bs-target="#del" data-bs-toggle="modal">
                            <div class="contenido">
                              <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/delete24x24.png"></span>
                              <span class="texto fs-5">BORRAR</span>
                            </div>
                        </button>    
                    </div>
                </div>
                <div class="col-6 container d-flex justify-content-center">
                    <div class="row">
                        <div class="d-flex justify-content-end scroll-short">
                            <table id="tabla" class="table table-responsive table-hover">
                                <!--Esta tabla es el equivalente al carrito-->
                                <thead class="text-center">
                                    <tr>
                                        <th>Producto</th>
                                        <th>Código</th>
                                        <th>Proveedor</th>
                                        <th>Precio $</th>
                                        <th>Precio Bs</th>
                                        <th>Cantidad</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>gorras</td>
                                        <td>001</td>
                                        <td>PROVEEDOR</td>
                                        <td>$$$</td>
                                        <td>BsBsBs</td>
                                        <td>
                                            <!--Este campo es el contador reactivo-->
                                            <form action="#" method="POST">
                                                <span id="count">0</span><!--Contador-->
                                                <div class="row d-flex justify-content-center">
                                                    <div class="col-6">
                                                        <!--Boton de incrementar-->
                                                        <button class="ms-3 button-magenta" id="decrementar">-</button>
                                                    </div>
                                                    <div class="col-6">
                                                        <!--Boton de decrementar-->
                                                        <button class="button-magenta" id="incrementar">+</button>
                                                    </div>
                                                    <input type="hidden" name="count" id="count_hidden" value="0">
                                                    <!--Input escondido para la lectura de PHP-->
                                                </div>
                                            </form>
                                            <!--Este formulario ya envia informacion con PHP.
                            
                                                    $count=$_POST['count'];
                                                    echo $count;
                                                
                                                Puedes hacer pruebas con este fragmento de PHP, si
                                                captura. Conectalo a la BBDD y funciona solo.
                                            -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Camisas</td>
                                        <td>00#</td>
                                        <td>PROVEEDOR</td>
                                        <td>$$$</td>
                                        <td>BsBsBs</td>
                                        <td>
                                            <!--Esto aqui no hace nada, es mera ilustracion-->
                                            <small id="counterValue2">0</small>
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-6">
                                                    <button class="ms-3 button-magenta" id="decrement-button2">-</button>
                                                </div>
                                                <div class="col-6">
                                                    <button class="button-magenta" id="increment-button2">+</button>
                                                </div>
                                            </div>
                                            <!--Todo este campo puede ser borrado-->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col text-center">
                                <button class="button-cyan fw-bold" data-bs-target="#factura" data-bs-toggle="modal">FACTURA</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="factura" aria-hidden="true" data-bs-backdrop="static">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5">Factura</h1>
                        </div>
                        <div class="modal-body">
                            <!--Esta tabla debe recibir los articulos del carrito-->
                            <table id="total" class="table table-responsive">
                                <thead class="text-center">
                                    <tr>
                                        <th>Producto</th>
                                        <th>Código</th>
                                        <th>Precio Bs</th>
                                        <th>Precio $</th>
                                        <th>Cantidad</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>gorras</td>
                                        <td>001</td>
                                        <td>$$$</td>
                                        <td>BsBsBs</td>
                                        <td>####</td>
                                    </tr>
                                    <tr>
                                        <td>Camisas</td>
                                        <td>00#</td>
                                        <td>$$$</td>
                                        <td>BsBsBs</td>
                                        <td>###</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer d-flex justify-content-center scroll-short">
                            <button class="button-add fw-bold" data-bs-dismiss="modal">
                                <!--Este boton debe confirmar que efectivamente
                                se facturó toda la operación-->
                                <div class="contenido">
                                    <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/check24x24.svg" width="30px"></span>
                                    <input type="submit" class="texto fw-bold" style="color: white;" id="editar-c" value="CONFIRMAR">
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
    <script src="../js/counter.js"></script>
    <script src="../js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../js/search.js"></script>
</html>