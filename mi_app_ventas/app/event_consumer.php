<?php

function actualizarInventario($datosVenta) {
    // Aquí se puede realizar la lógica para reducir el inventario del producto
    // Ejemplo simplificado:
    echo "Inventario actualizado para el producto: " . $datosVenta['producto'] . " (cantidad vendida: " . $datosVenta['cantidad'] . ")<br>";
}

function enviarNotificacion($datosVenta) {
    // Simulamos el envío de una notificación
    echo "Notificación enviada al cliente: " . $datosVenta['cliente'] . " sobre la compra del producto: " . $datosVenta['producto'] . "<br>";
}

?>
