<?php
header('Content-Type: application/json');
$dados = file_get_contents('data.json');
echo $dados;
?>
