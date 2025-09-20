<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

$rota = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$resposta = ['massage' => 'Informações do evento encontradas com sucesso'];

if ($method === 'GET'){
    if ($rota === '/evento'){
        echo json_encode($resposta);
        exit;
    }
    $respostaErro = ['massage' => 'Rota inválida'];
    echo json_encode($respostaErro);
    exit;
}