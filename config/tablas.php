<?php
function llenar_inventario($conn){
    //Se prepara la consulta
    $consulta = "SELECT p.producto, p.codigo_producto, pv.proveedores, p.precio_proveedor, p.precio_venta, i.stock
    FROM productos p
    INNER JOIN inventario i ON p.id_producto = i.id_producto
    INNER JOIN proveedor_producto pp ON p.id_producto = pp.id_producto
    INNER JOIN proveedores pv ON pp.id_proveedor = pv.id_proveedores;";

    //Se ejecuta la consulta
    $resultado = $conn->query($consulta);
    while ($producto = $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>
                <td>'.$producto["producto"].'</td>
                <td>'.$producto["codigo_producto"].'</td>
                <td>'.$producto["proveedores"].'</td>
                <td>'.$producto["precio_proveedor"]."$".'</td>
                <td>'.$producto["precio_venta"]."$".'</td>
                <td>'.$producto["stock"].'</td>
            </tr>';
    }
}
function llenar_usuarios($conn){
    $consulta = "SELECT `tipo_usuario`,`nombre`,`apellido`,`usuario`,`correo`,`cedula` 
    FROM `usuarios` WHERE 1";
    //Se ejecuta la consulta
    $resultado = $conn->query($consulta);
    while ($users = $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>
            <td>'.$users["tipo_usuario"].'</td>
            <td>'.$users["nombre"].'</td>
            <td>'.$users["apellido"].'</td>
            <td>'.$users["usuario"].'</td>
            <td>'.$users["correo"].'</td>
            <td>'.$users["cedula"].'</td>
        </tr>';
    }
}

//Esta funcion muestra las sucurles durante el registro
function traer_sucursal($conn){
    $consulta = "SELECT `id_sucursal`,`sucursal` FROM `sucursales` WHERE 1";
    //Se ejecuta la consulta
    $resultado = $conn->query($consulta);
    while ($sucur= $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value='.$sucur["id_sucursal"].'>'.$sucur["sucursal"].'</option>';
    }
}

//Esta funcion muestra los proveedores durante el registro
function traer_proveedores($conn){
    $consulta = "SELECT `id_proveedores`,`proveedores` FROM `proveedores` WHERE 1";
    //Se ejecuta la consulta
    $resultado = $conn->query($consulta);
    while ($prov= $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value='.$prov["id_proveedores"].'>'.$prov["proveedores"].'</option>';
    }
}

?>