<?php

$produtos = [
    ["produto" => "Arroz", "quantidade" => 10, "preco" => 10],
    ["produto" => "Feikao", "quantidade" => 9, "preco" => 115],
    ["produto" => "Macarrao", "quantidade" => 8, "preco" => 7],
    ["produto" => "Fuba", "quantidade" => 7, "preco" => 4]
];

echo "Produto\tQuantidade\tPreço\tTotal\n";
foreach ($produtos as $p) {
    $total = $p["quantidade"] * $p["preco"];
    echo "{$p['nome']}\t{$p['quantidade']}\t\t{$p['preco']}\t$total\n";
}
?>
