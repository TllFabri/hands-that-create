<?php
header('Content-Type: application/json');

$dados = json_decode(file_get_contents('data.json'), true);

$id = $_POST['id'] ?? null;
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$imagem = $_POST['imagem'];

if ($id) {
  foreach ($dados as &$p) {
    if ($p['id'] == $id) {
      $p['nome'] = $nome;
      $p['preco'] = $preco;
      $p['descricao'] = $descricao;
      $p['imagem'] = $imagem;
    }
  }
  $msg = "Produto atualizado com sucesso!";
} else {
  $novo = [
    "id" => count($dados) ? end($dados)['id'] + 1 : 1,
    "nome" => $nome,
    "preco" => $preco,
    "descricao" => $descricao,
    "imagem" => $imagem
  ];
  $dados[] = $novo;
  $msg = "Produto cadastrado com sucesso!";
}

file_put_contents('data.json', json_encode($dados, JSON_PRETTY_PRINT));

echo json_encode(["mensagem" => $msg]);
?>
