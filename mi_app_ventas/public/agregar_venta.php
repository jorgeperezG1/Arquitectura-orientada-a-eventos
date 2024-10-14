<?php
// Requiere el emisor de eventos
require_once '../app/event_emitter.php';

// Obtener datos del formulario
$cliente = $_POST['cliente'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];

// Generar el evento de venta
$evento = [
    'evento' => 'venta_realizada',
    'datos' => [
        'cliente' => $cliente,
        'producto' => $producto,
        'cantidad' => $cantidad,
        'fecha' => date("Y-m-d H:i:s")
    ]
];

// Emitir el evento
emitirEvento($evento);

// Redirigir de vuelta al formulario con mensaje de éxito
header("Location: index.html?success=1");
exit();
?>
