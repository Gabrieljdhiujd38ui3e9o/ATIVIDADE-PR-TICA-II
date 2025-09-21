<?php
function lerMatriz($nome) {
    $matriz = [];
    echo "Digite os valores da matriz $nome (3x3):\n";
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo "Linha ".($i+1)." Coluna ".($j+1).": ";
            $matriz[$i][$j] = (int)trim(fgets(STDIN));
        }
    }
    return $matriz;
}

$matriz1 = lerMatriz("A");
$matriz2 = lerMatriz("B");

$soma = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $soma[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];
    }
}

echo "\nMatriz resultante da soma:\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $soma[$i][$j] . "\t";
    }
    echo "\n";
}
?>
