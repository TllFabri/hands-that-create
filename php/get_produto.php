<?php
header('Content-Type: application/json');
$id = $_GET['id'] ?? null;
$dados = json_decode(file_get_contents('data.json'), true);

foreach ($dados as $produto) {
  if ($produto['id'] == $id) {
    echo json_encode($produto);
    exit;
  }
}
echo json_encode(["erro" => "Produto não encontrado"]);
?>
