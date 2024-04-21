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
        <title>Administración de Personal</title>
    </head>
    <body class="bg-light">
        <header class="bg-color-magenta py-3">
            <nav class="navbar mx-5">
                <div class="container-fluid">
                    <h1 class="navbar-brand text-white fs-3">ADMINISTRACIÓN DE USUARIOS <img src="../assets/favicons/system/users48x48.png" class="mb-3" alt="Administración de Usuarios"></h1>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
        </header>
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="d-flex justify-content-end text-end mx-5">
                <div class="navbar-nav bg-color-darkmagenta ps-5 pe-2 py-2 rounded-bottom">
                    <a href="root_stock.html" class="link-white me-1 mb-1 fs-5">Administración de Inventario<img src="../assets/favicons/system/trolley24x24.png" class="mx-1" alt="Inventario"></a>
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
                        <h3>USUARIO</h3>
                        <br>
                            <!--Los 3 botones (Agregar, Editar y Borrar)
                            deben estar en un include para evitar la repeticion.
                            Estos 3 botones se encuentran de forma natural y 
                            responsiva en los archivos: root_stock, root_users
                            y admin_stock-->
                        <div class="row mt-1">
                            <!--Aqui se empieza a recortar todo lo que se agregara
                            al include-->
                            <button class="button-add fw-bold" data-bs-target="#userAdd"  data-bs-toggle="modal">
                                <div class="contenido">
                                  <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/add32x32.png"></span>
                                  <span class="texto">AGREGAR</span>
                                </div>
                            </button>
                        </div>
                        <div class="row mt-2">
                            <button class="button-edit fw-bold" data-bs-target="#userEdit" data-bs-toggle="modal">
                                <div class="contenido">
                                  <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/edit24x24.png"></span>
                                  <span class="texto">EDITAR</span>
                                </div>
                            </button>                              
                        </div>
                        <div class="row mt-2">
                            <button class="button-delete fw-bold" data-bs-target="#borrar" data-bs-toggle="modal">
                                <div class="contenido">
                                  <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/delete24x24.png"></span>
                                  <span class="texto">BORRAR</span>
                                </div>
                            </button>                              
                        </div>
                    </div>
                    <br>
                    <!--Aqui finaliza el recorte del include-->
                </aside>

                <section class="col max">
                    <div class="d-flex justify-content-center">
                        <section class="container text-center ms-1 d-sm-block">
                            <div class="row ms-5 mb-2">
                                <div class="col d-lg-none mt-2">
                                    <button class="button-sm-add fw-bold">
                                        <div class="contenido">
                                          <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/add32x32.png"></span>
                                          <span class="texto">AGREGAR</span>
                                        </div>
                                    </button>
                                </div>
                                <div class="col d-lg-none mt-2">
                                    <button class="button-sm-edit fw-bold">
                                        <div class="contenido">
                                          <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/edit24x24.png"></span>
                                          <span class="texto">EDITAR</span>
                                        </div>
                                    </button>                              
                                </div>
                                <div class="col d-lg-none my-2">
                                    <button class="button-sm-delete fw-bold">
                                        <div class="contenido">
                                          <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/delete24x24.png"></span>
                                          <span class="texto">BORRAR</span>
                                        </div>
                                    </button>                              
                                </div>
                            </div>
                        </section>
                    </div>
                    <input type="text" id="search" class="form-control shadow mb-2" placeholder="Buscar">
                    <table id="tabla" class="table table-responsive table-hover border shadow">
                        <thead class="text-center">
                            <tr>
                                <th>Tipo de Usuario</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Usuario</th>
                                <th>Correo</th>
                                <th>Cédula</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                            llenar_usuarios($conn);
                            ?>
                        </tbody>
                    </table>
                </section>
                <!--Todos estamos modales desde aqui hasta la linea 433 estan en uso
                Inicia aqui-->
            </div>

            <!--Modal Label-->
            <div class="modal fade" id="borrar" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" id="searchDelete" class="form-control shadow mb-2" placeholder="Buscar...">
                        <table id="tablaDelete" class="table table-hover border shadow">
                            <thead class="text-center">
                                <tr>
                                    <th>ID Usuario</th>
                                    <th>Tipo de Usuario</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Usuario</th>
                                    <th>Correo</th>
                                    <th>Cédula</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>1</td>
                                    <td>root</td>
                                    <td>Diego</td>
                                    <td>Torres</td>
                                    <td>Usuario</td>
                                    <td>example@mail.com</td>
                                    <td>30.000.000</td>
                                    <td>
                                        <button class="button-mini-delete fw-bold" data-bs-dismiss="modal">
                                            <div class="contenido">
                                                <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/delete24x24.png" width="20px"></span>
                                                <input type="submit" class="texto fw-bold" style="color: white;" id="borrarFila">
                                            </div>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>admin</td>
                                    <td>Diego</td>
                                    <td>Torres</td>
                                    <td>Usuario</td>
                                    <td>example@mail.com</td>
                                    <td>30.000.000</td>
                                    <td>
                                        <button class="button-mini-delete fw-bold" data-bs-dismiss="modal">
                                            <div class="contenido">
                                                <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/delete24x24.png" width="20px"></span>
                                                <input type="submit" class="texto fw-bold" style="color: white;" id="borrarFila">
                                            </div>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>empleado</td>
                                    <td>Diego</td>
                                    <td>Torres</td>
                                    <td>Usuario</td>
                                    <td>example@mail.com</td>
                                    <td>30.000.000</td>
                                    <td>
                                        <button class="button-mini-delete fw-bold" data-bs-dismiss="modal">
                                            <div class="contenido">
                                                <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/delete24x24.png" width="20px"></span>
                                                <input type="submit" class="texto fw-bold" style="color: white;" id="borrarFila">
                                            </div>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="reset" class="button-delete fw-bold" data-bs-dismiss="modal">
                            <div class="contenido">
                                <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/cross30.png" width="30px"></span>
                                <input type="reset" class="texto fw-bold" style="color: white;" value="CANCELAR">
                            </div>
                        </button>
                        <button class="button-add fw-bold" data-bs-dismiss="modal">
                            <div class="contenido">
                                <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/check24x24.svg" width="30px"></span>
                                <input type="submit" class="texto fw-bold" style="color: white;" id="borrar" value="CONFIRMAR">
                            </div>
                        </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="modal fade" id="userEdit" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5">Edición</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body modal-scroll">
                            <input type="text" id="searchDelete" class="form-control shadow mb-2" placeholder="Buscar...">
                        <table id="tablaDelete" class="table table-hover border shadow">
                            <thead class="text-center">
                                <tr>
                                    <th>Tipo de Usuario</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Usuario</th>
                                    <th>Correo</th>
                                    <th>Cédula</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>root</td>
                                    <td>Diego</td>
                                    <td>Torres</td>
                                    <td>Usuario</td>
                                    <td>example@mail.com</td>
                                    <td>30.000.000</td>
                                    <td>
                                        <button class="button-mini-edit fw-bold" data-bs-target="#editar-t" data-bs-toggle="modal">
                                            <div class="contenido">
                                                <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/edit24x24.png" width="20px"></span>
                                                <input type="submit" class="texto fw-bold" style="color: white;" id="borrarFila">
                                            </div>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>admin</td>
                                    <td>Diego</td>
                                    <td>Torres</td>
                                    <td>Usuario</td>
                                    <td>example@mail.com</td>
                                    <td>30.000.000</td>
                                    <td>
                                        <button class="button-mini-edit fw-bold" data-bs-target="#editar-t" data-bs-toggle="modal">
                                            <div class="contenido">
                                                <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/edit24x24.png" width="20px"></span>
                                                <input type="submit" class="texto fw-bold" style="color: white;" id="borrarFila">
                                            </div>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>empleado</td>
                                    <td>Diego</td>
                                    <td>Torres</td>
                                    <td>Usuario</td>
                                    <td>example@mail.com</td>
                                    <td>30.000.000</td>
                                    <td>
                                        <button class="button-mini-edit fw-bold" data-bs-target="#editar-t" data-bs-toggle="modal">
                                            <div class="contenido">
                                                <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/edit24x24.png" width="20px"></span>
                                                <input type="submit" class="texto fw-bold" style="color: white;" id="borrarFila">
                                            </div>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>

                        <div class="modal-footer d-flex justify-content-center">
                            <button type="reset" class="button-delete fw-bold" data-bs-dismiss="modal">
                                <div class="contenido">
                                    <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/cross30.png" width="30px"></span>
                                    <input type="reset" class="texto fw-bold" style="color: white;" value="CANCELAR">
                                </div>
                            </button>
                            <button class="button-add fw-bold" data-bs-dismiss="modal">
                                <div class="contenido">
                                    <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/check24x24.svg" width="30px"></span>
                                    <input type="submit" class="texto fw-bold" style="color: white;" id="editar" value="CONFIRMAR">
                                </div>
                            </button>
                        </div>                    
                    </div>
                </div>
            </div>
            <div class="modal fade" id="editar-t" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5">Edición de Usuario</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body modal-scroll-x">
                            <form action="#" class="row">
                                <input type="text" class="form-control col" placeholder="root">
                                <input type="text" class="form-control col" placeholder="Diego" disabled>
                                <input type="text" class="form-control col" placeholder="Torres" disabled>
                                <input type="text" class="form-control col" placeholder="Usuario">
                                <input type="text" class="form-control col" placeholder="Correo">
                                <input type="number" class="form-control col" placeholder="30.000.000" disabled>
                            </form>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="reset" class="button-delete fw-bold" data-bs-dismiss="modal">
                                <div class="contenido">
                                    <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/cross30.png" width="30px"></span>
                                    <input type="reset" class="texto fw-bold" style="color: white;" value="CANCELAR">
                                </div>
                            </button>
                            <button class="button-add fw-bold" data-bs-dismiss="modal">
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

        <!--Registro de usuarios-->
        <div class="modal fade" id="userAdd" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5">Registro de Usuario</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <select class="form-select" name="usuario">
                            <option value="1">Empleado</option>
                            <option value="2">Administrador</op tion>
                            <option value="3">Root</option>
                        </select>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Correo Electrónico" name="mail">
                                    <label for="mail" class="form-label">Correo Electrónico</label>
                                </div>
                                <br>
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Usuario" name="user">
                                    <label for="user" class="form-label">Usuario</label>
                                </div>
                                <br>
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Cedula" name="ci">
                                    <label for="ci" class="form-label">Cedula</label>
                                </div>
                                <br>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Nombre" name="name">
                                    <label for="name" class="form-label">Nombre</label>
                                </div>
                                <br>
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Apellido" name="apellido">
                                    <label for="apellido" class="form-label">Apellido</label>
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="reset" class="button-delete fw-bold" data-bs-dismiss="modal">
                                <div class="contenido">
                                    <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/cross30.png" width="30px"></span>
                                    <input type="reset" class="texto fw-bold" style="color: white;" value="CANCELAR">
                                </div>
                            </button>
                            <button class="button-add fw-bold">
                                <div class="contenido">
                                    <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/check24x24.svg" width="30px"></span>
                                    <input type="submit" class="texto fw-bold" style="color: white;" id="agregar" value="CONFIRMAR">
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
        <div class="modal fade" id="borrar" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" id="searchDelete" class="form-control shadow mb-2" placeholder="Buscar...">
                        <table id="tablaDelete" class="table table-hover border shadow">
                            <thead class="text-center">
                                <tr>
                                    <th>ID Usuario</th>
                                    <th>Tipo de Usuario</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Usuario</th>
                                    <th>Correo</th>
                                    <th>Cédula</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>1</td>
                                    <td>root</td>
                                    <td>Diego</td>
                                    <td>Torres</td>
                                    <td>Usuario</td>
                                    <td>example@mail.com</td>
                                    <td>30.000.000</td>
                                    <td>
                                        <button class="button-mini-delete fw-bold" data-bs-dismiss="modal">
                                            <div class="contenido">
                                                <span class="car
                                                acter ms-1 mb-1"><img src="../assets/favicons/system/delete24x24.png" width="20px"></span>
                                                <input type="submit" class="texto fw-bold" style="color: white;" id="borrarFila">
                                            </div>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>admin</td>
                                    <td>Diego</td>
                                    <td>Torres</td>
                                    <td>Usuario</td>
                                    <td>example@mail.com</td>
                                    <td>30.000.000</td>
                                    <td>
                                        <button class="button-mini-delete fw-bold" data-bs-dismiss="modal">
                                            <div class="contenido">
                                                <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/delete24x24.png" width="20px"></span>
                                                <input type="submit" class="texto fw-bold" style="color: white;" id="borrarFila">
                                            </div>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>empleado</td>
                                    <td>Diego</td>
                                    <td>Torres</td>
                                    <td>Usuario</td>
                                    <td>example@mail.com</td>
                                    <td>30.000.000</td>
                                    <td>
                                        <button class="button-mini-delete fw-bold" data-bs-dismiss="modal">
                                            <div class="contenido">
                                                <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/delete24x24.png" width="20px"></span>
                                                <input type="submit" class="texto fw-bold" style="color: white;" id="borrarFila">
                                            </div>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="reset" class="button-delete fw-bold" data-bs-dismiss="modal">
                            <div class="contenido">
                                <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/cross30.png" width="30px"></span>
                                <input type="reset" class="texto fw-bold" style="color: white;" value="CANCELAR">
                            </div>
                        </button>
                        <button class="button-add fw-bold" data-bs-dismiss="modal">
                            <div class="contenido">
                                <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/check24x24.svg" width="30px"></span>
                                <input type="submit" class="texto fw-bold" style="color: white;" id="borrar" value="CONFIRMAR">
                            </div>
                        </button>
                    </div>
                </div>
                </div>
            </div>
        <!--Termina aqui-->

        <script src="../js/button_edit.js"></script>
        <script src="../js/bootstrap/bootstrap.bundle.min.js"></script>
        <script src="../js/search.js"></script>
    </body>
</html>