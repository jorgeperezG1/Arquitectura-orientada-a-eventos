<?php

function emitirEvento($evento) {
    // Leer el archivo de eventos almacenados
    $archivoEventos = '../data/ventas.json';
    $eventos = json_decode(file_get_contents($archivoEventos), true);

    // Agregar el nuevo evento
    $eventos[] = $evento;

    // Guardar los eventos de nuevo en el archivo
    file_put_contents($archivoEventos, json_encode($eventos, JSON_PRETTY_PRINT));

    // Llamar al mediador para procesar el evento
    require_once 'event_mediator.php';
    procesarEvento($evento);
}

?>
