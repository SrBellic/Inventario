document.getElementById("editar-c").addEventListener("click", function() {
    // Cerrar el modal actual
    var modalActual = document.getElementById("editar-t");
    var modalActualBS = bootstrap.Modal.getInstance(modalActual);
    modalActualBS.hide();

    // Mostrar el modal anterior
    var modalAnterior = document.getElementById("edit");
    var modalAnteriorBS = bootstrap.Modal.getInstance(modalAnterior);
    modalAnteriorBS.show();
});