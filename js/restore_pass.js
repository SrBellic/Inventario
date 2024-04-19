document.getElementById("formulario-recuperacion").addEventListener("submit", function(event) {
    event.preventDefault(); // Evitar que el formulario se envíe por defecto

    // Aquí puedes agregar la lógica para verificar el correo y mostrar el formulario de restablecimiento de contraseña
    var email = document.getElementById("email").value;
    // Suponiendo que tienes una función para verificar el correo y devolver el usuario correspondiente
    var usuario = verificarCorreo(email);

    // Mostrar el formulario de restablecimiento de contraseña
    mostrarFormulario(usuario);
});

// Función para verificar el correo y devolver el usuario correspondiente (puedes implementarla según tus necesidades)
function verificarCorreo(correo) {
    // Aquí iría tu lógica para verificar el correo y obtener el usuario correspondiente
    // Por ahora, devolveré un usuario de ejemplo
    return "UsuarioEjemplo";
}

// Función para mostrar el formulario de restablecimiento de contraseña
function mostrarFormulario(usuario) {
    // Obtener el elemento de la segunda columna
    var formulario = document.getElementById("formulario");

    // Limpiar el contenido de la segunda columna
    formulario.innerHTML = "";

    // Crear el formulario de restablecimiento de contraseña
    var formularioHTML = `
        <form action="#" class="container px-5" id="formulario-restablecer-contraseña">
            <h2>${usuario}</h2>
            <img src="../assets/favicons/system/pass32x32.png" class="mb-1" width="24px">
            <label for="nueva-contraseña" class="form-label">Nueva Contraseña:</label>
            <input class="form-control" type="password" id="nueva-contraseña" name="nueva-contraseña" required><br>
            <img src="../assets/favicons/system/pass32x32.png" class="mb-1" width="24px">
            <label for="confirmar-contraseña" class="form-label">Confirmar Contraseña:</label>
            <input class="form-control" type="password" id="confirmar-contraseña" name="confirmar-contraseña" required><br>
            <div class="row d-flex justify-content-center">
                <div class="col d-flex justify-content-end">
                    <div class="d-lg-block d-md-none">
                        <a class="button-sm-delete my-3 me-3 fw-bold link-white" href="../index.html">
                            <div class="contenido">
                                <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/back32x32.png"></span>
                                <span class="texto">VOLVER</span>
                            </div>
                        </a>
                    </div>
                    <div class="d-none d-sm-none d-md-block d-lg-none">
                        <a class="button-delete my-3 me-3 fw-bold link-white" href="../index.html">
                            <div class="contenido">
                                <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/back32x32.png"></span>
                                <span class="texto">VOLVER</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col d-flex justify-content-start">
                    <div class="d-lg-block d-md-none">
                        <button class="button-sm-add my-3 fw-bold">
                            <div class="contenido">
                                <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/check24x24.svg" width="30px"></span>
                                <input type="submit" class="texto fw-bold" style="color: white;" id="verificar" value="VERIFICAR">
                            </div>
                        </button>
                    </div>
                    <div class="d-none d-sm-none d-md-block d-lg-none">
                        <button class="button-add my-3 fw-bold">
                            <div class="contenido">
                                <span class="caracter ms-1 mb-1"><img src="../assets/favicons/system/check24x24.svg" width="30px"></span>
                                <input type="submit" class="texto fw-bold" style="color: white;" id="verificar" value="VERIFICAR">
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    `;

    // Agregar el formulario al contenido de la segunda columna
    formulario.innerHTML = formularioHTML;
}

// Función para manejar el envío del formulario de restablecimiento de contraseña
document.addEventListener("submit", function(event) {
    if (event.target && event.target.id === "formulario-restablecer-contraseña") {
        event.preventDefault(); // Evitar que el formulario se envíe por defecto

        // Aquí puedes agregar la lógica para enviar la nueva contraseña al servidor

        // Por ahora, solo mostraremos un mensaje de éxito
        alert("Contraseña restablecida con éxito!");
    }
});