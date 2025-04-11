<?php
header('Content-Type: application/json');

$rota = $_SERVER['REQUEST_URI'];

if ($rota == '/usuarios') {
    echo json_encode([
        ['id' => 1, 'nome' => 'Maria'],
        ['id' => 2, 'nome' => 'João']
    ]);
} else {
    http_response_code(404);
    echo json_encode(['erro' => 'Rota não encontrada']);
}
