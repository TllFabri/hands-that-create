<?php
header('Content-Type: application/json');
$id = $_GET['id'] ?? null;

$dados = json_decode(file_get_contents('data.json'), true);
$novos = array_filter($dados, fn($p) => $p['id'] != $id);

file_put_contents('data.json', json_encode(array_values($novos), JSON_PRETTY_PRINT));

echo json_encode(["mensagem" => "Produto excluído com sucesso!"]);
?>
