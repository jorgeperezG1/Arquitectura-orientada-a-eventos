<?php

function procesarEvento($evento) {
    // Procesar diferentes tipos de eventos
    if ($evento['evento'] === 'venta_realizada') {
        // Llamar a los consumidores
        require_once 'event_consumer.php';
        actualizarInventario($evento['datos']);
        enviarNotificacion($evento['datos']);
    }
}

?>
